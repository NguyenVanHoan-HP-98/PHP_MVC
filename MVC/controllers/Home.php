<?php
    class Home extends controller {
        public function SayHi()
        {
           $data = $this->model("SinhVienModel");
           echo $data->GetSV();
        }
        public function Show()
        {
            echo "Day laf function Show";
        }
    }

?>