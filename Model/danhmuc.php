<?php
	class danhmuc{
		function getAll(){
			$a = new DateBase;
			$con=$a->connnection();
			$sql = "select * from danhmuc where TrangThai = 1 ";
            $rs = mysqli_query($con,$sql);
            while ($row=mysqli_fetch_array($rs)){
				$MaDanhMuc  = $row['MaDanhMuc'];
				$TenDanhMuc=$row['TenDanhMuc'];
				$TrangThai=$row['TrangThai'];
				$danhmuc=['MaDanhMuc' => $MaDanhMuc, 'TenDanhMuc' => $TenDanhMuc , 'TrangThai' => $TrangThai ];
				$cacdanhmuc[] = $danhmuc;
				}
				return( $cacdanhmuc);
		}
	}
?>