<?php
    class SinhVienModel extends DB{
        public function GetSV()
        {
            return "Models tra ve data SinhVien";
        }
        public function Tong($a , $b)
        {
            return $a+$b;
        }

        public function SinhVien()
        {
            $qr = "SELECT *FROM SinhVien";
            return mysqli_query($this->con,$qr);
        }
    }
?>