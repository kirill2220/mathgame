<?php


if(isset($_POST['form'])){
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$sum=$_POST['sum'];
if(is_numeric($op2)){
    $sumTest=$op1+$op2;
    if($sum==$sumTest){
        echo 'Красава';
    
    }else{
        $error='подумай еще';
        echo $error;
    }

}else{
    echo'введены неверные данные';
}

}
if(!isset($error)){
    $sourceOperator1=rand(0,10);
    $sourceOperator2=rand(10,100);
    $sourceOperator3="";
}else{
    $sourceOperator1=$_POST['op1'];
    $sourceOperator2=$_POST['sum'];
    $sourceOperator3="";
}
?>