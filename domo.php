<?php

	//1. Tao class Sinh Vien
	
	class SinhVien{
		var $hoTen;
		var	$namSinh;
		var $diaChi;
		
		function SinhVien($hoTen, $namSinh, $diaChi){
			$this->hoTen 	= $hoTen;
			$this->namSinh 	= $namSinh;
			$this->diaChi	= $diaChi;
		}
	}
	
	//2.Tao mang mangSinhVien
	$mangSinhVien = array();
	
	//3.Them doi tuong sinh vien vao mang Sinh vien
	array_push($mangSinhVien, new SinhVien("Nguyen Van A", 1990, "Hà Nội"));
	array_push($mangSinhVien, new SinhVien("Nguyen Van B", 1991, "HCM"));
	array_push($mangSinhVien, new SinhVien("Nguyen Van C", 1992, "Cần Thơ"));
	array_push($mangSinhVien, new SinhVien("Nguyen Van D", 1993, "Kiên Giang"));
	
	//4. Chuyển về dữ liệu của mảng sinh viên ra định dang JSON
	
	echo json_encode($mangSinhVien);// chuyển về json json_encode
	
?>