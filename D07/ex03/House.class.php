<?PHP 
    class House{
        public function introduce(){
            echo ("House " .$this->getHouseName());
            echo (" of " .$this->getHouseSeat());
            echo (" : \"" .$this->getHouseMotto(). "\"\n");
        }
    }
?>
