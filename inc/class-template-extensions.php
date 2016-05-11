<?php

class Template_Extensions {

    private $index;

    public function __construct() {
        $this->index = 0;
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

    public function get_rss_items($url = '') {
        $url = empty($url) ? 'http://rss.cnn.com/rss/cnn_topstories.rss' : $url;

        $feed = new RSS_Feed($url);
        $feed = $feed->get_array();

        if ( ! $feed ) {
            return array();
        }

        return $feed['items'];
    }

    public function get_ical_items($url = '', $start_date = false, $end_date = false) {
        $url = empty($url) ? 'http://www.harker.org/calendar/page_2302.ics' : $url;
        $group_by_date = true;

        $feed = new ICS_Feed($url, $start_date, $end_date, $group_by_date);
        $feed = $feed->get_events();

        if ( ! $feed ) {
            return array();
        }

        // Sample Array
        // $dates = array(
        //     array(
        //         'date' => 'Jan. 1',
        //         'events' => array(
        //             array(
        //                 'header' => 'Header Text',
        //                 'content' => '7 to 9 p.m. | Saratoga Campus<br>View details'
        //             ) end event
        //         ) // end events
        //     ) // end date
        // );

        $dates = array();
        foreach($feed as $current_date) {
            $date = $this->format_date($current_date['date']);
            $events = array();
            
            foreach($current_date['events'] as $event) {
                $header = $event['title'];
                $content = $this->get_event_content($event);

                $header_element = ( !empty($header) ) ? array( 'text' => $header ) : array();
                $content_element = ( !empty($content) ) ? array( 'text' => $content ) : array();

                // add event
                $events[] = array(
                    'header' => $header_element,
                    'content' => $content_element
                );
            }

            // add date
            $dates[] = array(
                'date' => $date,
                'events' => $events
            );
        }

        return $dates;
    }

    public function get_column_width($column, $module) {
        $container_width = $module['width'] - (($module['column_count'] - 1) * $module['gutter_width']);
        $column_width = ""; // default
        $column_reduction = 0; // reduce width for Outlook 07/10/13 - removed this because of conditional HTML solution

        if ( !isset($column['width']) ) {
            // if there is no column width defined
            if ($module['column_count'] == 1) {
                $column_width = $module['width'];
            } else {
                $column_width = floor($container_width / $module['column_count']) - $column_reduction;
            }
        } else if ( isset($column['width']) && is_numeric($column['width']) && $column['width'] >= 0 && $column['width'] <= $container_width ) {
            // if column width is a valid pixel number
            $column_width = $column['width'];
        } else if ( isset($column['width']) && preg_match('/%/', $column['width']) ) {
            // if column width is a percentage
            if ( $column['width'] == '100%' ) {
                $column_width = $module['width'];
            } else {
                $column_width = floor((intval($column['width'])/100) * $container_width) - $column_reduction;
            }
        }

        return $column_width;
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

    public function get_event_content($event) {
        $content = '';

        if ( isset($event['start']) && isset($event['end']) ) {
            $content .= $this->format_time_range($event['start'], $event['end']);
        } elseif ( isset($event['start']) ) {
            $content .= $this->format_time_range($event['start']);
        }

        if ( !empty($content) && isset($event['location']) ) {
            $content .= ' | ' . $event['location'];
        }

        if ( isset($event['permalink']) ) {
            $content .= '<span class="event-link"><a href="'. $event['permalink'] . '">View details</a></span>';
        }

        return $content;
    }

    private function format_date($timestamp) {
        $month = $this->format_month($timestamp);
        $day = $this->format_day($timestamp);
        $day_of_week = $this->format_day_of_week($timestamp);

        return "<div class=\"day-of-week\">$day_of_week</div><div class=\"month\">$month</div><div class=\"day\">$day</div>";        
    }

    private function format_month($timestamp) {
        $month = date('F', $timestamp);

        // Abbreviate Jan., Feb., Aug., Sept., Oct., Nov. and Dec.
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

        return $month;
    }

    private function format_day_of_week($timestamp) {
        return date('l', $timestamp);
    }

    private function format_day($timestamp) {
        return date('j', $timestamp);
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

$template_extensions = new Template_Extensions();

?>