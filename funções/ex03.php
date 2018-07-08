<?php
   
   function soma(int ...$valores):float{
   	 return array_sum($valores);
   }
  
   var_dump(soma(1.9,5,7,8)) ;


?>