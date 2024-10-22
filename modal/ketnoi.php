<?php
    class clsketnoi{
        public function moketnoi(){
            $p = mysqli_connect("localhost","kiet3745","123","phongtap");
            return $p;
        }
        public function dongketnoi($con){
            $con -> close();
        }
    }
?>