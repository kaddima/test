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

        public function callProfile(){

            echo $this->name . ' '. $this->age;
        }

    }




?>