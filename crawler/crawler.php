<?php

$target_url=""; // TODO: Get from form
include_once('simple_html_dom.php');
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('a') as $link)
{
echo $link->href."<br />";
}
?>