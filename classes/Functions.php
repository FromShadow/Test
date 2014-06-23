<?php
/**
 * Created by PhpStorm.
 * User: Роман
 * Date: 11.06.14
 * Time: 16:42
 */

class Functions
{
    function my_redirect($url,$timer=0)
    {
        echo '<meta http-equiv="refresh" content="'.$timer.'; url='.$url.'">';
    }
} 