<?php

if ( ! function_exists('mccolors')) {

    /**
     * Minecraft Color Parser for PHP
     * Copyright (c) 2013, Minecrell
     * Copyright (c) 2021, febryars33 (small update :v)
     * MIT License: http://opensource.org/licenses/MIT
     * https://gist.github.com/Minecrell/755e53aced83ab48513f
     * @param  string  $string Text that wants to be colored.
     * @param  boolean $type   If you are using (&) as a color code, change the value of the $type variable to TRUE.
     * @return string          Returns a parsed string.
     */
    function mccolors($string, $type = FALSE) {

    	switch ($type) {
    		case TRUE:
			    $string = preg_replace('/\x26([0-9a-f])/i', '<span class="mc-color mc-$1">', $string, -1, $count) . str_repeat("</span>", $count);
			    return utf8_encode(preg_replace('/\x26([k-or])/i', '<span class="mc-$1">', $string, -1, $count) . str_repeat("</span>", $count));
    			break;
    		
    		default:
    			$string = utf8_decode(htmlspecialchars($string, ENT_QUOTES, "UTF-8"));
			    $string = preg_replace('/\xA7([0-9a-f])/i', '<span class="mc-color mc-$1">', $string, -1, $count) . str_repeat("</span>", $count);
			    return utf8_encode(preg_replace('/\xA7([k-or])/i', '<span class="mc-$1">', $string, -1, $count) . str_repeat("</span>", $count));
    			break;
    	}

	}

}
