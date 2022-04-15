<?php
// include('connection.php');
    class SanPham_M
    {
        public function tatCaSanPham()
        {
            $connect = new DateBase;
            $connect = $connect->connnection();

            $query = 'select * from sanpham';
            return mysqli_query($connect,$query);            
        }
        public function sanPhamTheoID($maSanPham)
        {
            $connect = new DateBase;
            $connect = $connect->connnection();

            $query = 'select * from sanpham where MaSanPham = ' . $maSanPham;
            return mysqli_query($connect,$query);    
        }
        public function truSanPham($maSanPham,$soLuongTru)
        {
            $connect = new DateBase;
            $connect = $connect->connnection();

            $query = 'update sanpham set SoLuong = (SELECT SoLuong from sanpham WHERE MaSanPham = '.$maSanPham.') - '.$soLuongTru.' WHERE MaSanPham = '.$maSanPham.'';
            mysqli_query($connect,$query);
        }
    }
?>