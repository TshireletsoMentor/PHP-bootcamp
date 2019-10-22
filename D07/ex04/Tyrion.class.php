<?PHP 
    class Tyrion extends Lannister{
        public function smashORpass($obj){
            if (get_parent_class($obj) == "Lannister")
                return ("Not even if i'm drunk !");
            else
                return ("Let's do this.");
        }
    }
?>