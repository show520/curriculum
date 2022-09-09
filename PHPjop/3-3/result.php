<?php
$numbers=$_POST['number'];
$number=rand($numbers);
$num=$numbers[$number];
echo date("Y/m/d")."運勢は";
echo '<br>';
echo "選ばれた数字は".$num;
echo '<br>';
if ($num==0){
    echo "凶";
}
elseif($num>=1 && $num<=3){
    echo "小吉";
}
elseif($num>=4 && $num<=6){
    echo "中吉";
}
elseif($num>=7 && $num<=8){
    echo "吉";
}
elseif($num==9){
    echo "大吉";
}
?>