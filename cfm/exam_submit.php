<?php
$input = $_POST['answer'];
$answers = explode(",", $input);
$grade = $_POST['examref'];
include(''.$grade.'.php');

$score = 0;
foreach($answers as $a){
	$score = $score + $answervalues[$a];
} 
$index = substr($grade,-1);
$pass = "0";
$mark = 0;

if($score >= array(0,1,1,0)[$index]){ $mark++; }
if($score >= array(0,10,10,13)[$index]){ $mark++; }
if($score >= array(0,25,28,25)[$index]){ $mark++; $pass = "1"; }
if($score >= array(0,50,41,40)[$index]){ $mark++; }
if($score >= array(0,60,61,50)[$index]){ $mark++; }

$rr = array("troll","dreadful","poor","acceptable","exceedsexpectations","outstanding")[$mark];

setcookie("jkrwg".$index,strval($mark),0,"/");
setcookie("jkrwg".$index."p",$pass,0,"/");
setcookie("jkrwg".$index."o","0",0,"/");
setcookie("jkrwg".$index."date",date("Y,n,j,00,00,00"),0,"/");
?>
<x><s><![CDATA[1]]></s><ex r="<?php echo $grade; ?>" p="<?php echo $pass; ?>" rr="<?php echo $rr; ?>"/></x>