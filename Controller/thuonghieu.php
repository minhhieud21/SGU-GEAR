<?php
	class thuonghieu_controller{
		function getAll(){
			include ("../../Model/thuonghieu.php");
			$p = new thuonghieu;
			return $p->getAll();
		}
		// function saveRegister($cus){
		// 	include ("../../Model/taikhoan.php");
		// 	$p=new taikhoan;
		// 	$p->saveTK($cus);
		// }
	}
?>