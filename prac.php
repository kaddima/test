<?php

    class Personal{

        public $name;
        public $age;

        function __construct($name,$age){

            $this->name = $name;
            $this->age = $age;
        }

        public function callName(){

            return $this->name;
        }

        /**this function returns users age
         * @return mixed
         *
         */
        public function getAge(){

            return $this->age;
        }

    }


    $obj = new Personal('kadima',22);

    echo $obj->callName();


?>