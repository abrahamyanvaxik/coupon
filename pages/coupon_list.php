<?php

global $wpdb;
$mytables=$wpdb->get_results("SHOW TABLES");
foreach ($mytables as $mytable)
{
    foreach ($mytable as $t)
    {
        echo $t . "<br>";
    }
}