<?php 
//////////////////////////////////////////////////////////// INITALISATION LA
// var_dump($a);
$a = array_shift($argv);
$la = $argv;
$a = count($la);
//////////////////////////////////////////////////////////// INITALISATION LB
$lb = [];
//////////////////////////////////////////////////////////// FONCTION SA
function sa(&$array){
    if(count($array) > 1){
    $var = $array[0];
    $array[0] = $array[1];
    $array[1] = $var;
    print_r($array);
    }
}
   
    function sb(&$array){
 
        if(count($array) > 1){
        $var = $array[0];
        $array[0] = $array[1];
        $array[1] = $var;
        print_r($array);
        }
    }
        
    function sc(&$la, &$lb){

        sa($la);
        sb($lb);
    }
    
    
    function pb(&$la, &$lb){
        if(!empty($la)){
            $first_element = array_shift($la);
            array_unshift($lb, $first_element);
        }
    }
    
    
    function pa(&$la, &$lb){
        if(!empty($lb)){
            $first_element = array_shift($lb);
            array_unshift($la, $first_element);
        }
    }
    
    
    function ra(&$la){
        $first_element = array_shift($la);
        array_push($la, $first_element);
    }
    
    
    function rb(&$lb){
        $first_element = array_shift($lb);
        array_push($lb, $first_element);
    }


    function rr(&$la, &$lb){
        ra($la);
        rb($lb);
    }

    function rra(&$la){
        $last_element = array_pop($la);
        array_unshift($la, $last_element);
    }


    function rrb(&$lb){
        $last_element = array_pop($lb);
        array_unshift($lb, $last_element);
    }

    function rrr(&$la, &$lb){
        rra($la);
        rrb($lb);
    }
    
            function sort_numbers(Array &$la, &$lb){
                $var = '';
                $content = $la;
                while(count($la) > 1){
                    foreach($la as $numbers){
                        $min_numbers = min($la);
                        if($numbers === $min_numbers){
                            pb($la, $lb);
                            $var .= 'pb ';
                        } else
                        {
                            ra($la);
                            $var .= 'ra ';
                        }
                    }
                }
                for ($i=1; $i = count($lb) ; $i++) { 
                    pa($la, $lb);
                   $var .= 'pa ';
                }

                if($la !== $content){
                    echo trim($var)."\n";
                } else{
                    echo "\n";
                }
            }
            sort_numbers($la, $lb);

            