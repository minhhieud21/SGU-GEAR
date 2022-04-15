<?php
	include('../../Model/sanpham.php');
    class sanpham_controller
    {
        public function getOnly()
        {
            $a = new sanpham;

            return $a->getOnly();
        }
        public function getAll()
        {
            $a = new sanpham;
            return $a->getAll();
        }
        public function getDone()
        {
            $a = new sanpham;
            return $a->getDone();
        }
        public function getshow()
        {
            $a = new sanpham;

            return $a->getshow();
        }
    }
?>