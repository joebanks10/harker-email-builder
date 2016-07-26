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