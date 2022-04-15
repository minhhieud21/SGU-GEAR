<?php
include('../../Model/sanPham_M.php');
    class SanPham_C
    {
        public function tatCaSanPham()
        {
            $sanPhamModel = new SanPham_M;

            return $sanPhamModel->tatCaSanPham();
        }
        public function sanPhamtheoID($maSanPham)
        {
            $sanPhamModel = new SanPham_M;
            
            return $sanPhamModel->sanPhamTheoID($maSanPham); 
        }
        public function truSanPham($maSanPham,$soLuongTru)
        {
            $sanPhamModel = new SanPham_M;

            $sanPhamModel->truSanPham($maSanPham,$soLuongTru);
        }
    }
?>
