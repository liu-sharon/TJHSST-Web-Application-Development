<!-- <?php

	$n1 = $_REQUEST["num1"];
echo($n1);
?> -->

<?php
$matches=null;
$n1 = $_REQUEST["num1"];
//$n1 = "test2";
$subject = "a";
$pattern = "/\b$n1\w*\b/";
$matches = array();
$matches_length=count($matches);
$subject = file_get_contents('https://www.tjhsst.edu/~2017sliu2/Lab04/wordsEn.txt');

preg_match_all($pattern, $subject, $matches);
for($i=0; $i<$matches_length;$i++){
echo '<pre>';print_r($matches); echo'</pre>';
}


//echo $n1 + 1 ;
?>