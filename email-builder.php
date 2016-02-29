<?php

// include dependencies
require_once __DIR__ . '/vendor/autoload.php';

class Email {

    public $loader;
    public $twig;

    /**
     * Create and render the twig template
     * 
     * @param string $email_dir The directory of the email
     */
    public function __construct($email_dir = __DIR__) {

        $ical = new ICS_Feed('http://www.harker.org/calendar/page_2302.ics');

        $template_directories = array(
            __DIR__ . '/templates/layouts',
            __DIR__ . '/templates/modules'
        );

        $email_directories = array(
            $email_dir
        );

        if ( file_exists($email_dir . '/modules') ) {
            $email_directories[] = $email_dir . '/modules';
        }

        // create loader and add email directories
        $this->loader = new Twig_Loader_Filesystem($email_directories);

        // add template paths and attach to 'tmpl' namespace
        $this->loader->setPaths($template_directories, 'tmpl');

        // create twig environment
        $this->twig = new Twig_Environment($this->loader);

        // add rss feed function
        $rss_func = new Twig_SimpleFunction('rss', array($this, 'get_rss_items') );
        $this->twig->addFunction($rss_func);

        // add ical feed function
        $ical_func = new Twig_SimpleFunction('ical', array($this, 'get_ics_items') );
        $this->twig->addFunction($ical_func);

        // get data
        $data = array();

        // render template
        if ( file_exists($email_dir . '/layout.html') ) {
            echo $this->twig->render('layout.html', $data);
        } else {
            echo $this->twig->render('base.html', $data);
        }

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

    public function get_ics_items($url = '', $page_id) {
        $url = empty($url) ? 'http://www.harker.org/calendar/page_2302.ics' : $url;

        $feed = new ICS_Feed($url, $page_id);
        $feed = $feed->get_array();

        if ( ! $feed ) {
            return array();
        }

        return $feed;
    }

}

class RSS_Feed {

    private $object;
    private $array;

    /**
     * Creates a SimplePie object and an array with and RSS URL
     * 
     * @param string $url The URL of an RSS feed
     */
    public function __construct($url) {

        // get SimplePie object
        $this->object = $this->get_rss_object($url);
        
        // convert SimplePie object to a basic array
        $this->array = $this->to_array($this->object);

    }

    /**
     * Returns SimplePie RSS feed object
     * 
     * @return object SimplePie RSS feed object
     */
    public function get_object() {
        return $this->object;
    }

    /**
     * Returns a simple array of the RSS feed
     * 
     * @return array The feed as an array
     */
    public function get_array() {
        return $this->array;
    }

    /**
     * Gets and parses an RSS feed and returns an array of posts
     *
     * @param  string $url      The URL of the RSS feed
     * @return object|false     The SimplePie feed, false on failure
     */             
    private function get_rss_object($url) {
        $feed = new SimplePie();
        
        $feed->set_feed_url(array($url));
        $feed->enable_cache(false);
        
        if ( ! $feed->init() ) {
            return array();
        }

        $feed->handle_content_type();

        return $feed;
    }

    /**
     * Convert SimplePie object to a simple array
     * 
     * @param  object $object   A SimplePie feed object
     * @return array|false      An array containing the feed, false on failure
     */
    private function to_array($object) {
        
        if ( ! $object || ! $object instanceof SimplePie ) {
            trigger_error('Unable to create Array with URL.', E_USER_WARNING);
            
            return false;
        }

        $feed = array();

        // get general feed data
        $feed['title'] = $object->get_title();
        $feed['permalink'] = $object->get_permalink();
        $feed['description'] = $object->get_description();
        $feed['items'] = array();

        // get feed items
        foreach($object->get_items() as $item) {
            $feed_item = array();

            $feed_item['title'] = $item->get_title();
            $feed_item['permalink'] = $item->get_permalink();
            $feed_item['date'] = $item->get_date('D., M. j, Y');
            $feed_item['description'] = $item->get_description();
            $feed_item['content'] = $item->get_content();

            $feed['items'][] = $feed_item;
        }

        return $feed;
    }

}

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

// Debuggin
ini_set('display_errors', 1);
error_reporting(E_ALL);
