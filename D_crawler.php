<meta charset="GBK">

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
//    print_r($detail_title);


    $detail_content = file_get_contents($detail_url);
    $detail_right_pattern = '/<td>(.*)<\/td>/';
//    $detail_right_pattern = '/<strong>' . $detail_name . ' (.*?)<\/strong>/';
    preg_match_all($detail_right_pattern, $detail_content, $detail_right);
//    print_r($detail_right[1][2]);
//    print_r($detail_right[1][3]);
//    print_r($detail_right[1][4]);
//    print_r($detail_right[1][5]);

    print($detail_name . ',' . $detail_title[1][0] . ',' .$detail_right[1][2] . ','.$detail_right[1][3] . ','.$detail_right[1][4] . ','.$detail_right[1][5] . "\n");
    sleep(1);

}


$url = "http://www.feeyo.com/vflight/flightlist.htm";

$main_content = file_get_contents($url);


//print_r($main_content);
$test_content = '<a href="http://www.feeyo.com/vflight/delay/a/CSX_SZX_ZH9978.htm" target="_blank" title="CSX-SZX">ZH9978</a>';

$uri_pattern = "/<a href='(.*?)' target='_blank' title='(.*?)'>(.*?)<\/a>/";

//$uri_pattern = '/a/';
preg_match_all($uri_pattern, $main_content, $matches);
//preg_match_all($uri_pattern, $test_content, $matches);
//print_r($matches[1]);
//print($main_content);

//$new_matches = [];
//for ($i = 0; $i < 5; ++$i) {
//    $new_matches[] = $matches[1][$i];
//}
//print_r($matches[2]);

print_r("ID,Name,Right,Half,One,More\n");

foreach($matches[1] as $key => $value) {
    get_detail($value, $matches[3][$key]);
}

//$detail_url = 'http://www.feeyo.com/vflight/delay/a/HGH_CDG_ZI1907.htm';
//$detail_name = 'ZI1907';
//get_detail($detail_url, $detail_name);
