<?php

class ICS_Feed {

    private $object;
    private $array;
    private $hkr_page_id;

    public function __construct($url, $start_date = false, $end_date = false) {
        // instantiate object and array
        $this->get_page_id($url);
        $this->start_date = (is_int($start_date)) ? $start_date : strtotime($start_date);
        $this->end_date = (is_int($end_date)) ? $end_date : strtotime($end_date);

        // end timestamp is end of the "end day" (11:59:59)
        $this->end_date = strtotime(date('Y-m-d', $this->end_date)) + 60*60*24 - 1;

        if ($this->start_date > $this->end_date) {
            throw new Exception('Start date is after end date.');
        }

        $this->create_ics_object($url);
        $this->create_ics_array($url);
    }

    /**
     * Returns a simple array of the ICal feed
     * 
     * @return array The feed as an array
     */
    public function get_events() {
        return $this->array;
    }

    private function get_page_id($url) {
        // http://www.harker.org/calendar/page_2302.ics
        // http://www.harker.org/calendar/calendar_2854.ics
        
        $url_parts = explode('.ics', $url);
        $url_parts = (isset($url_parts[0])) ? explode('_', $url_parts[0]) : array();

        $this->hkr_page_id = (isset($url_parts[1])) ? trim($url_parts[1]) : '2302';
    }

    /**
     * Build the ICS object using the ICal class
     * 
     * @param  string $url The URL of the iCal feed
     * @return object      An instance of the ICal class
     */
    private function create_ics_object($url) {
        $this->object = new \ICal($url);

        return $this->object;
    }

    private function create_ics_array($url) {
        $ical = ( isset($this->object) ) ? $this->object : $this->create_ics_object($url);
        $this->object = $ical;

        $events = $ical->events();
        $array = array();

        $current_date = 0;
        $current_events = array();

        foreach ($events as $event) {
            if (!$this->in_lower_bound($event)) {
                continue;
            }

            if (!$this->in_upper_bound($event)) {
                break;
            }

            $item = array();

            if ( isset($event['UID']) ) {
                $item['id'] = trim(str_replace('@www.harker.org', '', $event['UID']));
            }
            if ( isset($event['SUMMARY']) ) {
                $item['title'] = stripslashes($event['SUMMARY']);
            }
            if ( isset($event['DTSTART']) ) {
                $item['start'] = $ical->iCalDateToUnixTimestamp($event['DTSTART']);
            }
            if ( isset($event['DTEND']) ) {
                $item['end'] = $ical->iCalDateToUnixTimestamp($event['DTEND']);
            }
            if ( isset($event['LOCATION']) ) {
                $item['location'] = stripslashes($event['LOCATION']);
            }
            if ( isset($event['DESCRIPTION']) && !empty($event['DESCRIPTION']) ) {
                $item['description'] = stripslashes(str_replace('\n', '<br>', trim($event['DESCRIPTION'], ' \t\n\r\0\x0B')));
            }
            if ( isset($item['id']) && isset($item['description']) && $this->hkr_page_id ) {
                $item['permalink'] = 'http://www.harker.org/page.cfm?id=' . $this->hkr_page_id . '&verbose=' . $item['id'];
            }

            // add item to array
            $array[] = $item;
        }

        $this->array = $array;
        return $this->array;
    }

    private function in_lower_bound($event) {
        $is_valid = true;
        $event_start = $this->object->iCalDateToUnixTimestamp($event['DTSTART']);

        if ($this->start_date && ($event_start < $this->start_date)) {
            $is_valid = false;
        }

        return $is_valid;
    }

    private function in_upper_bound($event) {
        $is_valid = true;
        $event_start = $this->object->iCalDateToUnixTimestamp($event['DTSTART']);

        if ($this->end_date && ($event_start > $this->end_date)) {
            $is_valid = false;
        }

        return $is_valid;
    }

}
