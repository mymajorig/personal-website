
<?php
    $names = [Ruth, Eva, Tyler, Emily, Elle, Robert, Diany];
    $sortedList = sort($names);

    foreach($sortedList as $individualName){
        echo"
            <div style='font-size:12px; color: white; padding: 1rem;'>$individualName</div>
       "
    }