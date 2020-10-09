<?php
for($a = 1; $a < 11; $a++){
	for($b = 1; $b <= $a; $b++){
	echo  $b;
}
echo "<br>";
}
echo "<br>";

$b = array();
for($a=1; $a<=10; $a++){
	array_push($b, $a);
	echo implode(" ", $b);
	echo "<br>";
}

echo "<br>";

// echo"<table><tr><td align='center'>";
//     for($i=0;$i<=10;$i++){
//        for($a=$i;$a>=1;$a--){
//          echo"XX";
//        }
//     echo"<br/>";
//    }
//   for($i=0;$i<=10;$i++){
//     for($a=$i;$a<=10;$a++){
//       echo"XX";;
//     }
//   echo"<br/>";
//   }
//  echo"</td></tr></table>";

for( $a=10;$a>0;$a--){
for($i=1; $i<=$a; $i++){
echo "_";

}
for($a1=10;$a1>$a;$a1--){
echo"x";
}
for($a2=10;$a2>$a;$a2--){
echo"x";
}
echo"<br>";
}
for($b=0; $b<=10;$b++){
for($j=1;$j<=$b;$j++){
echo"_";
}
for($b1=10; $b1>$b;$b1--){
echo"x";
}
for($b2=10; $b2>$b;$b2--){
echo"x";
}
echo"<br>";
}
 
?>