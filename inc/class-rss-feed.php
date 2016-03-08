<?php

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
