<?php

class Template_Extensions {

    private $index;
    private $data;

    public function __construct($data = array()) {
        $this->index = 0;
        $this->data = $data;
    }
    
    // TEMPLATE FUNCTIONS
    // ------------------------------------------

    public function render_file($file) {
        return file_get_contents($file);
    }

    public function get_module_classes($other_classes = '') {
        $index = $this->get_index(); 
        $alt = ( $index % 2 ) ? 'odd' : 'even';

        return "module-$index module-$alt $other_classes";
    }

    public function get_opposite_direction($direction) {
        $opposite = '';

        if($direction == 'left') {
            $opposite = 'right';
        } else if ($direction == 'right') {
            $opposite = 'left';
        }

        return $opposite;
    }

    public function get_table_position($direction) {
        $position = 'left'; // default

        if ($direction == 'rtl') {
            $position = 'right';
        }

        return $position;
    }

    public function get_column_width($column, $module) {
        $container_width = $module['width'] - (($module['column_count'] - 1) * $module['gutter_width']);
        $column_width = ""; // default
        $column_reduction = 0; // reduce width for Outlook 07/10/13 - removed this because of conditional HTML solution

        if ( empty($column['width']) ) {
            // if there is no column width defined
            if ($module['column_count'] == 1) {
                $column_width = $module['width'];
            } else {
                $column_width = floor($container_width / $module['column_count']) - $column_reduction;
            }
        } else if ( !empty($column['width']) && is_numeric($column['width']) && $column['width'] >= 0 && $column['width'] <= $container_width ) {
            // if column width is a valid pixel number
            $column_width = $column['width'];
        } else if ( !empty($column['width']) && preg_match('/%/', $column['width']) ) {
            // if column width is a percentage
            if ( $column['width'] == '100%' ) {
                $column_width = $module['width'];
            } else {
                $column_width = floor((intval($column['width'])/100) * $container_width) - $column_reduction;
            }
        }

        return $column_width;
    }

    public function get_image_url($url) {
        if ( preg_match('/^http/', $url) ) {
            return $url; // no processing needed
        }

        if ( preg_match('/^~\//', $url) ) {
            $url = preg_replace('/^~\//', '', $url);
            $url = $this->data['ROOT_IMG_DIR_URL'] . '/' . $url;
        } else {
            $url = $this->data['email']['img_dir_url'] . '/' . $url;
        }

        return $url;
    }

    public function get_rss_items($args) {
        if (!empty($args['articles'])) {
            return $args['articles'];
        }

        $url = empty($args['rss']) ? 'http://rss.cnn.com/rss/cnn_topstories.rss' : $args['rss'];

        $feed = new RSS_Feed($url);
        $feed = $feed->get_array();

        if ( ! $feed ) {
            return array();
        }

        return $this->get_articles($feed['items']);
    }

    private function get_articles($feed_items) {
        $articles = array();

        foreach($feed_items as $item) {
            $articles[] = $this->get_article($item);
        }

        return $articles;
    }

    private function get_article($item) {
        $img = $this->get_article_image_url($item['content']);

        $options = array(
            'permalink' => $item['permalink'],
            'header' => array(
                'text' => $item['title']
            ),
            'content' => array(
                'text' => strip_tags($item['description'])
            ),
            'button' => array(
                'type' => 'text',
                'text' => 'Read More'
            )
        );

        if ($img) {
            $options['img'] = array(
                'src' => $img
            );
        }

        return array(
            'template' => 'article',
            'options' => $options
        );
    }

    private function get_article_image_url($content) {
        $dom = new DOMDocument;
        $dom->loadHTML($content);
        $images = $dom->getElementsByTagName('img');
        
        if ($images->length == 0) {
            return null;
        }

        $image = $images->item(0);
        $src = $image->attributes->getNamedItem('src')->value;

        return $src;
    }

    public function get_ical_items($args) {
        if (!empty($args['dates'])) {
            // dates object was manually created
            return $args['dates'];
        }

        if ( !empty($args['events']) ) {
            $events = $args['events'];
        } else {
            // fetch events from ical feed
            $url = $args['ical'];
            $start_date = $args['start_date'];
            $end_date = $args['end_date'];

            $events = new ICS_Feed($url, $start_date, $end_date);
            $events = $events->get_events();
        }

        if (empty($events)) {
            return array();
        }

        // return calendar items
        return $this->get_calendar_items($events);
    }

    private function get_calendar_items($events) {
        $dates = array();
        $current_date = $events[0]['start']; // set to first date
        $current_events = array();

        foreach($events as $event) {
            // check if date has changed
            if (date('M. j, Y', $event['start']) != date('M. j, Y', $current_date)) {
                // add date and events to array
                $dates[] = array(
                    'date' => $this->format_date($current_date),
                    'events' => $current_events
                );

                // set date to new date and reset events
                $current_date = $event['start'];
                $current_events = array();
            }

            // add event to current date's events
            $current_events[] = $this->format_event($event);
        }

        return $dates;
    }

    public function convert_elements_to_columns($elements = array()) {
        $columns = array();

        foreach($elements as $element) {
            $columns[] = array(
                "elements" => array(
                    $element
                )
            );
        }

        return $columns;
    }

    public function convert_dates_to_columns($dates = array()) {
        $columns = array();
        $date_width = "25%"; // 68 / 269
        $events_width = "75%"; // 199 / 269
 
        foreach($dates as $date) {

            if ( !(isset($date['date']) && isset($date['events'])) ) {
                continue;
            }

            $date_element = array(
                array(
                    'template' => 'date',
                    'options' => array(
                        'text' => $date['date']
                    )
                )
            );

            $event_elements = array();
            foreach($date['events'] as $event) {
                $event_elements[] = array(
                    'template' => 'event',
                    'options' => array(
                        'header' => array(
                            'text' => $event['header']
                        ),
                        'content' => array(
                            'text' => $event['content']
                        )
                    )
                );
            }

            $columns[] = array(
                'elements' => array(
                    array(
                        'template' => 'grid',
                        'options' => array(
                            'column_count' => 2,
                            'columns' => array(
                                array(
                                    'width' => $date_width,
                                    'elements' => $date_element
                                ), 
                                array(
                                    'width' => $events_width,
                                    'elements' => $event_elements
                                ) 
                            ) // end columns
                        ) // end element options
                    ) // end element
                ) // end elements
            );
        }

        return $columns;
    }

    // UTILITY FUNCTIONS
    // ------------------------------------------

    private function get_index($increment = true) {
        $this->index = (isset($this->index)) ? $this->index : 0;
        $index = ($increment) ? $this->index++ : $this->index;

        return $index;
    }

    private function format_event($data) {
        $header = $this->format_title($data['title']);
        $content = $this->get_event_content($data);

        $header_element = ( !empty($header) ) ? array( 'text' => $header ) : array();
        $content_element = ( !empty($content) ) ? array( 'text' => $content ) : array();

        // add event
        return array(
            'header' => $header_element,
            'content' => $content_element
        );
    }

    public function format_title($title) {
        $title = preg_replace('/PS/', 'Prechool', $title);
        $title = preg_replace('/LS/', 'Lower School', $title);
        $title = preg_replace('/MS/', 'Middle School', $title);
        $title = preg_replace('/US/', 'Upper School', $title);

        $title = preg_replace('/G8/', 'Grade 8', $title);
        $title = preg_replace('/Mtg/', 'Meeting', $title);

        return $title;
    }

    public function get_event_content($event) {
        $content = '';

        if ( !empty($event['start']) && !empty($event['end']) ) {
            $content .= $this->format_time_range($event['start'], $event['end']);
        } elseif ( !empty($event['start']) ) {
            $content .= $this->format_time_range($event['start']);
        }

        if ( !empty($content) && !empty($event['location']) ) {
            $content .= ' | ' . $event['location'];
        }

        if ( !empty($event['permalink']) ) {
            $content .= '<span class="event-link"><a href="'. $event['permalink'] . '">View details</a></span>';
        }

        return $content;
    }

    private function format_date($timestamp) {
        $month = $this->format_month($timestamp, 'M', true);
        $day = $this->format_day($timestamp, 'j', true);
        $day_of_week = $this->format_day_of_week($timestamp, 'l', true);

        return "<div class=\"day-of-week\">$day_of_week</div><div class=\"month\">$month</div><div class=\"day\">$day</div>";        
    }

    private function format_month($timestamp, $format = '', $uppercase = false) {
        if ($format == 'abbreviate') {
            // Abbreviate Jan., Feb., Aug., Sept., Oct., Nov. and Dec.
            $month = date('F', $timestamp);

            switch($month) {
                case 'January':
                    $month = 'Jan.';
                    break;
                case 'February':
                    $month = 'Feb.';
                    break;
                case 'August':
                    $month = 'Aug.';
                    break;
                case 'September':
                    $month = 'Sept.';
                    break;
                case 'October':
                    $month = 'Oct.';
                    break;
                case 'November':
                    $month = 'Nov.';
                    break;
                case 'December':
                    $month = 'Dec.';
                    break;
            }
        } else {
            $month = date($format, $timestamp);
        }

        if ($uppercase) {
            $month = strtoupper($month);
        }            

        return $month;
    }

    private function format_day_of_week($timestamp, $format = 'l', $uppercase = false) {
        $day_of_week = date($format, $timestamp);

        if ($uppercase) {
            $day_of_week = strtoupper($day_of_week);
        } 

        return $day_of_week;
    }

    private function format_day($timestamp, $format = 'j', $uppercase = false) {
        $day = date($format, $timestamp);

        if ($uppercase) {
            $day = strtoupper($day);
        } 

        return $day;
    }

    private function format_time_range($start_time, $end_time = false) {
        $content = '';
        $has_start = false;

        if ( date('g:i a', $start_time) != '12:00 am' ) {
            // start time exists
            $has_start = true;
            $start_time = $this->format_time($start_time);

            $content .= $start_time;
        }

        if ( $has_start && $end_time ) {
            $end_time = $this->format_time($end_time);
            
            $start_period = $this->get_time_period($start_time);
            $end_period = $this->get_time_period($end_time);

            if ( $start_period == $end_period ) {
                $content = str_replace(array(' a.m.', ' p.m.'), '', $content);
            }

            $content .= ' to ' . $end_time;
        }

        return $content;
    }

    private function format_time($timestamp) {
        $time = date('g:i a', $timestamp);

        $time = str_replace(':00', '', $time);
        $time = str_replace('am', 'a.m.', $time);
        $time = str_replace('pm', 'p.m.', $time);

        return $time;
    }

    private function get_time_period($time) {
        $parts = explode(' ', $time);
        $period = (isset($parts[1])) ? $parts[1] : '';

        return $period;
    }

}

?>