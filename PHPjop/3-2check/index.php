<?php
$price =[100,150,500];
$quantity = [ 3, 1, 6];
function totalMoney($price,$quantity){
         $money=$price*$quantity;
        return $money;
};  
$fruits=["りんご"=>totalMoney(100,3),"みかん"=>totalMoney(150,1),"もも"=>totalMoney(500,6)];
foreach($fruits as $key=>$value){
    echo $key,'は',$value,'円です。';
    echo '<br/>';
}