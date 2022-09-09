<?php
$fruits = ["リンゴ" => 100, "みかん" =>150, "もも" => 500];
$quantity = [0 => 3, 1 => 1, 2 =>6];
$fruit=["リンゴ","みかん","もも"];
function totalMoney($quantity, $value) {
    $money = $quantity * $value ;
    return $money;
}
$price[0]=totalMoney(3,100);
$price[1]=totalMoney(1,150);
$price[2]=totalMoney(6,500);
print $fruit[0]."は". $price[0]."円です。";
echo '<br>';
print $fruit[1]."は" .$price[1]."円です。";
echo '<br>';
print $fruit[2]."は" .$price[2]."円です。";
?>

