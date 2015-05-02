<?php
/**
 * Created by PhpStorm.
 * User: zhenghu
 * Date: 15 年 五月. 2.
 * Time: 23:21
 */

function get_detail($detail_url, $detail_name) {
    $detail_content = file_get_contents($detail_url);
    $detail_title_pattern = '/<strong>' . $detail_name . ' (.*?)<\/strong>/';
    preg_match_all($detail_title_pattern, $detail_content, $detail_title);
    print_r($detail_title);

}


$url = "http://www.feeyo.com/vflight/flightlist.htm";

$main_content = file_get_contents($url);


//print_r($main_content);
$test_content = '<a href="http://www.feeyo.com/vflight/delay/a/CSX_SZX_ZH9978.htm" target="_blank" title="CSX-SZX">ZH9978</a>';

$uri_pattern = "/<a href='(.*?)' target='_blank' title='(.*?)'>(.*?)<\/a>/";

//$uri_pattern = '/a/';
preg_match_all($uri_pattern, $main_content, $matches);
//preg_match_all($uri_pattern, $test_content, $matches);
//print_r($matches[0]);
//print($main_content);

$detail_url = 'http://www.feeyo.com/vflight/delay/a/HGH_CDG_ZI1907.htm';
$detail_name = 'ZI1907';
get_detail($detail_url, $detail_name);
