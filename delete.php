<?php

/**
 * @author GallerySoft.info
 * @copyright 2016
 */

    
$con = mysqli_connect("localhost","root","","phimanh");
mysqli_query($con, "SET NAMES 'UTF8'");// ÐAT TIENG VIET

//$ten     = $_POST['tenPhim'];
//$theLoai = $_POST['theLoai'];
//$quocGia = $_POST['quocGia'];

$id = $_POST['id'];

$query = "DELETE FROM chieurap where id = '$id'";

if(trim($id)==''){
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