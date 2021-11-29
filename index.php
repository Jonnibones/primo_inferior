<?php 
    
    function PrimoInferior($num)
    {
        if ($num == 1) {
            return "ERROR";
        }
        elseif($num == 2)
        {
            return $num;
        }
        elseif($num < 0)
        {
            return 0;
        }
        else
        {
            for($i = 3; $i <= $num; $i = $i + 2)
           {

                if ($i%2 == 1 && $i%3 == 1 && $i%5 == 1 || $i%5 == 2 ) 
                {
                    $primo = $i;
                }

           }
       
            return $primo;
        }

    }

?>