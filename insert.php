<?php

/**
 * @author GallerySoft.info
 * @copyright 2016
 */

$con = mysqli_connect("localhost","root","","phimanh");
mysqli_query($con, "SET NAMES 'UTF8'");// ĐAT TIENG VIET

$ten     = $_POST['tenPhim'];
$theLoai = $_POST['theLoai'];
$quocGia = $_POST['quocGia'];

$query = "INSERT INTO chieurap VALUES(null, '$ten', '$theLoai', '$quocGia')";

if(trim($ten) == '' || trim($theLoai) == '' || trim($quocGia) == ''){
    echo "0";
}
else{
    if(mysqli_query($con, $query)){
        echo "1";
    
    }else{
        echo "2";
   
    }
}

?>