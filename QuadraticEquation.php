<?php
    class QuadraticEquation{
        private $a;
        private $b;
        private $c;

        public function __construct($a, $b, $c)
        {
            $this->a=$a;
            $this->b = $b;
            $this->c = $c;
        }
        public function getA(){
            return $this->a;
        }
        public function getB(){
            return $this->b;
        }
        public function getC(){
            return $this->c;
        }
        public function getDiscriminant(){
            $delta = pow($this->b,2) - 4 * $this->a * $this->c;
            return $delta;
        }
        public function getRoot(){
            $root = (-$this->b)/(2*$this->a);
            return $root;
        }
        public function getRoot1(){
            $root1 = (-$this->b + sqrt($this->getDiscriminant()))/(2*$this->a);
            return $root1;
        }
        public function getRoot2(){
            $root2 = (-$this->b - sqrt($this->getDiscriminant()))/(2*$this->a);
            return $root2;
        }
        public function display(){
            if ($this->getDiscriminant()<0){
                echo "The equation has no roots";
            }
            if ($this->getDiscriminant()>0){
                echo "The equation have two solution: " . $this->getRoot1(). " , " .$this->getRoot2();
            }
            if ($this->getDiscriminant()==0){
                echo "The equation has one solution: " .$this->getRoot();
            }
        }
    }
    $Caculate = new QuadraticEquation(1,2,1);
    $Caculate->display();
?>
