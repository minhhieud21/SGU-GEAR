<?php
	class thuonghieu{
		function getAll(){
			$a = new DateBase;
			$con=$a->connnection();
			$sql = "select * from thuonghieu ";
            $rs = mysqli_query($con,$sql);
            while ($row=mysqli_fetch_array($rs)){
				$MaThuongHieu  = $row['MaThuongHieu'];
				$TenThuongHieu=$row['TenThuongHieu'];
				$TrangThai=$row['TrangThai'];
				$thuonghieu=['MaThuongHieu' => $MaThuongHieu, 'TenThuongHieu' => $TenThuongHieu , 'TrangThai' => $TrangThai  ];
					$cacthuonghieu[] = $thuonghieu;
				}
				return( $cacthuonghieu);
		}
	}
?>