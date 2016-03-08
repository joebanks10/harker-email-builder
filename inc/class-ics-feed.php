<?php

class ICS_Feed {

    private $object;
    private $array;
    private $hkr_page_id;

    public function __construct($url, $hkr_page_id = '2302') {
        // instantiate object and array
    
        $this->hkr_page_id = $hkr_page_id;

        $this->create_ics_object($url);
        $this->create_ics_array();
    }

    /**
     * Returns ICal feed object
     * 
     * @return object ICal feed object
     */
    public function get_object() {
        return $this->object;
    }

    /**
     * Returns a simple array of the ICal feed
     * 
     * @return array The feed as an array
     */
    public function get_array() {
        return $this->array;
    }

    /**
     * Build the ICS object using the ICal class
     * 
     * @param  string $url The URL of the iCal feed
     * @return object      An instance of the ICal class
     */
    private function create_ics_object($url) {
        $this->object = new ICal($url);

        return $this->object;
    }

    private function create_ics_array() {
        $ical = ( isset($this->object) ) ? $this->object : $this->create_ics_object();

        $events = $ical->events();
        $array = array();

        // echo '<pre>'; print_r( $events ); echo '</pre>'; die();

        foreach ($events as $event) {
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
            if ( isset($event['DTSTAMP']) ) {
                $item['timestamp'] = $ical->iCalDateToUnixTimestamp($event['DTSTAMP']);
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

            $array[] = $item;
        }

        // echo '<pre>'; print_r( $array ); echo '</pre>'; die();

        $this->array = $array;

        return $this->array;
    }

}