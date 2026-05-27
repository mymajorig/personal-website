
<?php

    $employees = [
        [
            'Name' => 'Arlo',
            'Phone Number' => "123-457-7980"
        ],
        [
            'Name' => 'Bella',
            'Phone Number' => '555-555-5555'
        ],
        [
            'Name' => 'Ciara',
            'Phone Number' => '101-001-1001'
        ],

    ];
     
    $count = 1;

    foreach($employees as $individualEmployee){
        echo "
            <div style='font-size:12px; color:#999;'>Employee #".$count."</div>
			<div style='font-size:16px; font-weight:bold;'>".$individualEmployee['Name']."</div>
			<div style='font-size:14px; margin-bottom:20px;'>".$individualEmployee['PhoneNumber']."</div>
		";
        $count++;
    }