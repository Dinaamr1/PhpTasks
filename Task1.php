<?php
//If Statement
$x=4;
$y=1;
$z="4";
$t=null;

if ($x==$y){
    echo "Right.<br>" ;
}else{
    echo "Wrong.<br>" ;
}
if ($t){
    echo $t;
}else{
    echo "Plz put value in T. <br>";
}
//Short Hand
echo $x===$z ? "Yes.<br>" : "No.<br>" ;
echo $t ?? "Put value in T. <br>";
//If-elseif statement 1st one with"{}"
$a=20;
$b=10;
if ($a<=$b){
    echo "a<b <br>";
}elseif ($a==$b){
    echo "a=b <br>";
}elseif ($a>=$b){
    echo "a>b <br>";
}else{
    echo "Not valid <br>";
}
//If-elseif statement 2nd one without"{}"
$c=9;
$d=5;
if ($c<=$d)
    echo "c<d <br>";
elseif ($c==$d)
    echo "c=d <br>";
elseif ($d>=$c)
    echo "d>c <br>";
else
    echo "Not valid <br>";

//If-elseif statement 3rd one with": - end if"
$score=95;
$degree=80;
if ($score<=$degree):
    echo "Excellent <br>";
elseif ($score==$degree):
    echo "V.good <br>";
elseif ($degree<=$score):
    echo "pass <br>";
else:
    echo "failed <br>";
endif;
//Switch
$h=5;
$w=10;
switch($w-$h){
    case NULL:
        echo "Equal zero <br>";
break;
     case "5":
        echo "Equal 5 <br>";
        break;
        default:
        echo "Not valid <br>";
}
//Object
$names=(object)["name1"=>"Ahmed","name2"=>"Dina"];
echo $names->name1."<br>";
//For loop
for($d=0;$d<5;$d++){
    echo $d."<br>";
}
//For each loop
foreach ($names as $name=>$val){
    echo $name."<br>";
    echo $val."<br>";
}
//While loop
$subjects=["Php","Html","PS","CS","DB"];
$s=0;
while (count($subjects)>$s){
   echo "My subject is:$subjects[$s].<br>";
   $s++;
}
//do While loop
$n=10;
do{
    echo "Number is:$n.<br>";
    $n+=10;
}while ($n<=50);