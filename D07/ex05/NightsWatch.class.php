<?PHP 
    class NightsWatch implements IFighter{
        private $vars = [];

        public function recruit($obj){
            if ($obj instanceof IFighter){
                $this->$var[] = $obj;
            }
        }
        public function fight(){
            foreach ($this->$var as $key => $input)
                $input->fight();
        }
    }
?>