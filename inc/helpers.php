<?php

namespace HKR;

/**
 * Filtering a array by its keys using a callback.
 * 
 * @param $array array The array to filter
 * @param $callback Callback The filter callback, that will get the key as first argument.
 * 
 * @return array The remaining key => value combinations from $array.
 */
function array_filter_key(array $array, $callback) {
    $matched_keys = array_filter(array_keys($array), $callback);
    
    return array_intersect_key($array, array_flip($matched_keys));
}

/**
 * Minifies html
 * 
 * @param  string $html HTML as a string
 * @return string       Minified HTML
 */
function minify_html($html) {
    // preg_replace('/[\s\t\r\n]+/', ' ', $email); // old code

    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s',      // shorten multiple whitespace sequences
        '/[\n\r]+/'      // strip new lines and returns
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $html = preg_replace($search, $replace, $html);

    return $html;
}
