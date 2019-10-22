<?PHP
    class Jaime extends Lannister{
        public function smashORpass($obj){
            if (get_parent_class($obj) == "Lannister"){
                if(get_class($obj) == "Cersei")
                    return ("With pleasure, but only in a tower in Winterfell, then.");
                else
                    return ("Not even if I'm drunk !");
            }
            else
                return ("Let's do this.");
        }
    }
?>