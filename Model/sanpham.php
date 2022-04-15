<?php
    class sanpham{
        function getOnly(){
			$a=new DateBase;
			$con=$a->connnection();
			$sql = "select distinct MaThuongHieu from sanpham where TrangThai = 1 ";
            $rs = mysqli_query($con,$sql);
            while ($row=mysqli_fetch_array($rs)){
				$cacthuonghieu[] = $row['MaThuongHieu'];
			}
			return ($cacthuonghieu);
		}
        function getAll(){
			$a=new DateBase;
			$con=$a->connnection();
			$sql = "select * from sanpham where TrangThai = 1 ";
            $rs = mysqli_query($con,$sql);
			$row=mysqli_fetch_array($rs);
            while ($row=mysqli_fetch_array($rs)){
				$MaSanPham   = $row['MaSanPham'];
				$TenSanPham=$row['TenSanPham'];
				$SoLuong  = $row['SoLuong'];
				$MaDanhMuc=$row['MaDanhMuc'];
				$MaThuongHieu  = $row['MaThuongHieu'];
				$Anh=$row['Anh'];
				$MoTa  = $row['MoTa'];
				$Gia=$row['Gia'];
				$LoaiShow  = $row['LoaiShow'];
				$sanpham=['MaSanPham' => $MaSanPham, 'TenSanPham' => $TenSanPham , 'SoLuong' => $SoLuong, 'MaDanhMuc' => $MaDanhMuc, 'MaThuongHieu' => $MaThuongHieu, 'Anh' => $Anh, 'MoTa' => $MoTa, 'Gia' => $Gia, 'LoaiShow' => $LoaiShow];
				$cacsanpham[] = $sanpham;
			}
			return($cacsanpham);
		}
        function getDone(){
			$a=new DateBase;
			$con=$a->connnection();
			$sql = "select * from sanpham where TenSanPham like '%".$_REQUEST['search']."%' and TrangThai = 1";
            $rs = mysqli_query($con,$sql);
            while ($row=mysqli_fetch_array($rs)){
                $MaSanPham   = $row['MaSanPham'];
				$TenSanPham=$row['TenSanPham'];
				$SoLuong  = $row['SoLuong'];
				$MaDanhMuc=$row['MaDanhMuc'];
				$MaThuongHieu  = $row['MaThuongHieu'];
				$Anh=$row['Anh'];
				$MoTa  = $row['MoTa'];
				$Gia=$row['Gia'];
				$LoaiShow  = $row['LoaiShow'];
				$sanpham=['MaSanPham' => $MaSanPham, 'TenSanPham' => $TenSanPham , 'SoLuong' => $SoLuong, 'MaDanhMuc' => $MaDanhMuc, 'MaThuongHieu' => $MaThuongHieu, 'Anh' => $Anh, 'MoTa' => $MoTa, 'Gia' => $Gia, 'LoaiShow' => $LoaiShow];
				$cacsanpham[] = $sanpham;
			}
			return($cacsanpham);
		}
		function getshow(){
			$a=new DateBase;
		   $con=$a->connnection();
		   $sql = "select * from sanpham where  TrangThai = 1";
		   $rs = mysqli_query($con,$sql);
		   while ($row=mysqli_fetch_array($rs)){
			   $MaSanPham = $row['MaSanPham'];
			   $TenSanPham = $row['TenSanPham'];
			   $Anh = $row['Anh'];
			   $Gia = $row['Gia'];
			   $LoaiShow = $row['LoaiShow'];
			   $sanpham=['MaSanPham' => $MaSanPham, 'TenSanPham' => $TenSanPham , 'Anh' => $Anh , 'Gia' => $Gia , 'LoaiShow' => $LoaiShow ];
			   $cacsanpham[] = $sanpham;
		   }
		   return ($cacsanpham);
	   }
    }
?>