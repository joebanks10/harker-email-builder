<?php

namespace HKR\Email_Builder;

class Email_Cache {
    private $settings;

    public function __construct($args = array()) {
        $defaults = array(
            'folder_path' => null
        );

        $this->settings = array_merge($defaults, $args);

        // create cache folder
        $cache_folder = $this->settings['folder_path'];
        if (!file_exists($cache_folder)) {
            if (!mkdir($cache_folder)) {
                throw new Exception("Unable to create cache");
            }
        }
    }

    /**
     * Store the HTML in a file
     * 
     * @param  string $filename Filename (excludes path)
     * @param  string $html     HTML content
     * @param  int $modified    A timestamp for when the file was last modified
     * @return void
     */
    public function put($filename, $html, $modified = null) {
        $path = $this->settings['folder_path'] . "/$filename";

        file_put_contents($path, $html);

        if (isset($modified)) { 
            touch($path, $modified);
        }
    }

    /**
     * Get content at filename
     * 
     * @param  string $filename Filename (excludes path)
     * @return string           HTML content
     */
    public function get($filename) {
        $path = $this->settings['folder_path'] . "/$filename";

        return file_get_contents($path);
    }

    public function is_invalid($filename, $new_modified) {
        $path = $this->settings['folder_path'] . "/$filename";

        return (filemtime($path) < $new_modified);
    }
}
