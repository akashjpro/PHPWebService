<?php

/**
 * @author GallerySoft.info
 * @copyright 2016
 */

    $con = mysqli_connect("localhost","root","","phimanh");
    
    //$con = mysqli_connect("mysql.hostinger.vn","u413200587_akasj","AKSpro2020","u413200587_adroi");
    mysqli_query($con, "SET NAMES 'UTF8'");// ÐAT TIENG VIET
    
    $query = "SELECT * FROM chieurap";
    $data = mysqli_query($con, $query);
    
    $mangPhim = array();
    
    while($row = mysqli_fetch_array($data, MYSQLI_ASSOC)){
        array_push($mangPhim, new Phim(
            $row['id'], $row['tenphim'], $row['theloai'], $row['quocgia']
        ));
    }
    
    echo json_encode($mangPhim);
    
    class Phim{
        var $id;
        var $tenPhim;
        var $theLoai;
        var $quocGia;
        function Phim($id, $tenPhim, $theLoai, $quocGia){
            $this->id  = $id;
            $this->tenPhim = $tenPhim;
            $this->theLoai = $theLoai;
            $this->quocGia = $quocGia; 
        }
    }
    
    

?>