<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$result1='football';
$result2='handball';
$result3='bascketball';
$result4='vollayball';
$result5='football';
$counter=0;
$name=$_POST['username'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
$ans1=$_POST['ans1'];
$ans2=$_POST['ans2'];
$ans3=$_POST['ans3'];
$ans4=$_POST['ans4'];
$ans5=$_POST['ans5'];
if($ans1==$result1)
$counter+=20;
if($ans2==$result2)
$counter+=20;
if($ans3==$result3)
$counter+=20;
if($ans4==$result4)
$counter+=20;
if($ans5==$result5)
$counter+=20;
echo "<h1>"." ".$name." "."your grade is"." ".$counter."%"."</h1>";
}
else "you cannot enter directly";
?>