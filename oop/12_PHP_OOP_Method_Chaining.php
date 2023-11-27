

<?php

    class myClass{
        public function one(){
            echo "one";
            return $this; //! must be do return
        }
        public function two(){
            echo "two";
            return $this; //! must be do return
        }
        public function three(){
            echo "three";
            return $this; //! must be do return
        }
    }


    $res = new myClass();

    $res->one()->two()->three();