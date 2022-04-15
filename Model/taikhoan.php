<?php
	class taikhoan{
		function checkTK($email,$pass){
			// include ('connection.php');
			$a=new DateBase;
			$con=$a->connnection();
			$sql="select * from taikhoan where Email='".$email."'";
			$rs=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($rs);
            if($row==0){
                echo '<script>alert("Không tìm thấy tài khoản")</script>';
            }
			else{
				if($pass==$row['MatKhau']){
					if($row['KichHoat']=='01'){
						if($row['Quyen']=='01'){
							session_start();
							$_SESSION['MaTaiKhoan']=$row['MaTaiKhoan'];
							$_SESSION['Holot']=$row['HoLot'];
							$_SESSION['Ten']=$row['Ten'];
							$_SESSION['Quyen']=$row['Quyen'];
							header('location: ../../AdminGearGaming/View/index.php');
						}
						else{
							session_start();
							$_SESSION['MaTaiKhoan']=$row['MaTaiKhoan'];
							$_SESSION['Holot']=$row['HoLot'];
							$_SESSION['Ten']=$row['Ten'];
							$_SESSION['Quyen']=$row['Quyen'];
							header('location: ../index.php');
						}
					}
					else{
						echo '<script>alert("Tài khoản bạn chưa được kích hoạt. Vui lòng kích hoạt để sử dụng")</script>';
					}
				}
				else{
					echo '<script>alert("Nhập sai password")</script>';
				}
			}
		}
		function saveTK($cus){
			// include ('connection.php');
			$a = new DateBase;
			$con = $a->connnection();
			$holot=$cus['Holot'];
			$ten=$cus['Ten'];
			$email=$cus['Email'];
			$phone=$cus['Phone'];
			$pass=$cus['Password'];
			$sql_checkEmail="select *  from taikhoan where Email='".$email."'";
			$sql_checkPhone="select *  from taikhoan where Phone='".$phone."'";
			$rs_Email=mysqli_query($con,$sql_checkEmail);
			$rs_Phone=mysqli_query($con,$sql_checkPhone);
			$row_Email=mysqli_fetch_array($rs_Email);
			$row_Phone=mysqli_fetch_array($rs_Phone);
            if($row_Email!=0){
                echo '<script>alert("Địa chỉ email đã được đăng ký. Vui lòng nhập lại địa chỉ email")</script>';
            }
            else if($row_Phone!=0){
            	echo '<script>alert("Số điện thoại đã được đăng ký. Vui lòng nhập lại số điện thoại")</script>';
            }
            else{
            	$sql="insert into taikhoan(HoLot,Ten,Email,Phone,MatKhau,KichHoat,Quyen) values('".$holot."','".$ten."','".$email."','".$phone."','".$pass."','0','0')";
				mysqli_query($con,$sql);
				echo "<script>alert('Vui lòng đăng nhập vào Gmail để xác thực tài khoản');window.location='login.php';
				</script>";
            }
		}
		function getTK($matk){
			$a=new DateBase;
			$con=$a->connnection();
			$sql="select * from taikhoan where MaTaiKhoan='".$matk."'";
			$rs=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($rs)){
				$matk=$row['MaTaiKhoan'];
				$holot=$row['HoLot'];
				$ten=$row['Ten'];
				$email=$row['Email'];
				$phone=$row['Phone'];
				$taikhoan=['MaTaiKhoan' => $matk, 'HoLot' => $holot, 'Ten' => $ten, 'Email' => $email, 'Phone' => $phone];
			}
			return $taikhoan;
		}
		function showDSTK_KH(){
			include ('connection.php');
			$a=new DateBase;
			$con=$a->connnection();
			$sql="select * from taikhoan where Quyen=0";
			$rs=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($rs)){
				$matk=$row['MaTaiKhoan'];
				$holot=$row['HoLot'];
				$ten=$row['Ten'];
				$email=$row['Email'];
				$phone=$row['Phone'];
				$kichhoat=$row['KichHoat'];
				$taikhoan=['MaTaiKhoan' => $matk, 'HoLot' => $holot, 'Ten' => $ten, 'Email' => $email, 'Phone' => $phone, 'KichHoat' => $kichhoat];
				$dstk_kh[]=$taikhoan;
			}
			return $dstk_kh;
		}
		function showDSTK_QL(){
			include ('connection.php');
			$a=new DateBase;
			$con=$a->connnection();
			$sql="select * from taikhoan where Quyen=1";
			$rs=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($rs)){
				$matk=$row['MaTaiKhoan'];
				$holot=$row['HoLot'];
				$ten=$row['Ten'];
				$email=$row['Email'];
				$phone=$row['Phone'];
				$kichhoat=$row['KichHoat'];
				$taikhoan=['MaTaiKhoan' => $matk, 'HoLot' => $holot, 'Ten' => $ten, 'Email' => $email, 'Phone' => $phone, 'KichHoat' => $kichhoat];
				$dstk_ql[]=$taikhoan;
			}
			return $dstk_ql;
		}
		function addNV($nv){
			include ('connection.php');
			$a = new DateBase;
			$con = $a->connnection();
			$holot=$nv['Holot'];
			$ten=$nv['Ten'];
			$email=$nv['Email'];
			$phone=$nv['Phone'];
			$pass=$nv['Password'];
			$quyen=$nv['Quyen'];
			$sql_checkEmail="select *  from taikhoan where Email='".$email."'";
			$sql_checkPhone="select *  from taikhoan where Phone='".$phone."'";
			$rs_Email=mysqli_query($con,$sql_checkEmail);
			$rs_Phone=mysqli_query($con,$sql_checkPhone);
			$row_Email=mysqli_fetch_array($rs_Email);
			$row_Phone=mysqli_fetch_array($rs_Phone);
            if($row_Email!=0){
                echo '<script>alert("Địa chỉ email đã được đăng ký. Vui lòng nhập lại địa chỉ email")</script>';
            }
            else if($row_Phone!=0){
            	echo '<script>alert("Số điện thoại đã được đăng ký. Vui lòng nhập lại số điện thoại")</script>';
            }
            else{
            	$sql="insert into taikhoan(HoLot,Ten,Email,Phone,MatKhau,KichHoat,Quyen) values('".$holot."','".$ten."','".$email."','".$phone."','".$pass."','1','".$quyen."')";
				mysqli_query($con,$sql);
            }
		}
	}
?>