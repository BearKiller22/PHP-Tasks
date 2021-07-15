<?php

    class Worker{

        public $result = null;

        public function first($number){
            $counter = Array();
            $this->result .= "[";

            for($i=0; $i < $number; $i++) { 
                if($i <= 2){
                    $counter[$i] = $i;
                }
                else{
                    $counter[$i] = $counter[$i-1] + $counter[$i-2];
                }
                $this->result .= $counter[$i];
                $this->result .= ",";
            }

            $this->result .= "]";
            return  $this->result;
        }

        public function second($number){
            $count = strlen((string)$number);

            for ($i=0; $i < $count; $i++) { 
                $this->result[$i] = $number%10;
                $number /= 10;
            }
            
            return $this->result;
        }

        public function thierd($number){
            $numbers = explode(',',$number);
            $counter = count($numbers);

            if($counter <= 2){
                $this->result = "ეს შეიძლება იყოს ან არ იყოს არითმეტიკული პროგრესია";
            }
            else{
                $d = $numbers[1]-$numbers[0];
                for ($i=0; $i < $counter-1; $i++) {
                    if($numbers[$i+1] - $numbers[$i] == $d){
                        $this->result = "ეს არის არითმეტიკული პროგრესია";
                    }
                    else{
                        $this->result = "ეს არ არის არითმეტიკული პროგრესია";
                        break;
                    }
                }

            }

            return $this->result;
        }

        public function fourth($number){ 
            $numbers = explode(',',$number);
            $count = count($numbers);

            for ($i=0; $i < $count; $i++) { 
                if(!($numbers[$i]%10 == 0)){
                    $this->result .= $numbers[$i].',';
                }
            }

            for ($i=0; $i < $count; $i++) { 
                if($numbers[$i]%10 == 0){
                    $this->result .= $numbers[$i].',';
                }
            }
            return $this->result;
        }

        public function fifth($number){
            $numbers = explode(',',$number);
            $count = 0;
            $tmpCount = 0;

            for ($i=0; $i < count($numbers) ; $i++) { 
                for ($j=0; $j < count($numbers) ; $j++) { 
                    if($numbers[$j] == $numbers[$i]){
                        $tmpCount++;
                    }
                }
                if($tmpCount>$count){
                    $this->result = $numbers[$i];
                    $count = $tmpCount;
                }
            }
            return $this->result;
        }
    }