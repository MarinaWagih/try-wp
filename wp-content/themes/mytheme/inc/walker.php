<?php

/**
 * Created by PhpStorm.
 * User: marina
 * Date: 4/3/17
 * Time: 10:44 PM
 */


class walker_Nav_Primary extends Walker_Nav_Menu
{
    function start_lvl( &$output ,$depth)
    {
        $indent = str_repeat("\t",$depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu $submenu depth_$depth\">\n";
    }
    function start_el()
    {
        
    }
    function end_lvl()
    {
        
    }
    function end_el()
    {
        
    }
    
}