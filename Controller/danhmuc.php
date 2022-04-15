<?php
	class danhmuc_controller{
		function getAll(){
			include ("../../Model/danhmuc.php");
			$p = new danhmuc;
			$sampham =$p->getAll();
			return $sampham;
		}
		// function saveRegister($cus){
		// 	include ("../../Model/taikhoan.php");
		// 	$p=new taikhoan;
		// 	$p->saveTK($cus);
		// }
	}
?>