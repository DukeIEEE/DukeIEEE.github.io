<?php
include('simple_html_dom.php');
$html = file_get_html('http://sites.duke.edu/ieee/');
$ret = $html->find('div[id=main]');
$img = $ret->find('img'); 
$r->srcset = null;
echo $ret[0];
?>