<?php
	class taikhoan_controller{
		function checkLogin($email,$pass){
			include ("../../Model/taikhoan.php");
			$p=new taikhoan;
			$p->checkTK($email,$pass);
		}
		function saveRegister($cus){
			include ("../../Model/taikhoan.php");
			$p=new taikhoan;
			$p->saveTK($cus);
		}
		function getTKKH($matk){
			include ("../../Model/taikhoan.php");
			$p=new taikhoan;
			$taikhoan=$p->getTK($matk);
			return $taikhoan;
		}
		function showKH(){
			include ("../../Model/taikhoan.php");
			$p=new taikhoan;
			$dstaikhoan=$p->showDSTK_KH();
			return $dstaikhoan;
		}
		function showQL(){
			include ("../../Model/taikhoan.php");
			$p=new taikhoan;
			$dstaikhoan=$p->showDSTK_QL();
			return $dstaikhoan;
		}
	}
?>