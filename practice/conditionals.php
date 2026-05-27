
<?php
    $input1 = 8;
    $input2 = 7;

    if($input1<$input2){
        echo "The number ".$input1." is less than the number ".$input2.".";
    }
    else if($input2<$input1){
         echo "The number ".$input2." is less than the number ".$input1.".";
    }
    else {
         echo "The number ".$input2." has the same value as the number ".$input1.".";
    }