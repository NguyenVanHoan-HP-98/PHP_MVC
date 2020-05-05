<?php
    class Home extends controller {
        public function SayHi()
        {
           $data = $this->model("SinhVienModel");
           echo $data->GetSV();
        }
        
        public function Show($a,$b)
        {
            // móc số 3 ra sài chơi
            $data = $this->model("SinhVienModel");
            $tong = $data->Tong($a,$b);


            // đẩy số 3 sang bên view 
            $this->view("lopngoai",["number"=>$tong,
                                    "page"=>'news',
                                    "SV"=>$data->SinhVien()
                                    ]);
        }
    }

?>