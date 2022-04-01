<?php
include('connection/connection_mobile.php');

$lat = $_GET['lat'];
$lon = $_GET['lon'];
$sql_t_max = "select * from t_max_10day order by ABS(LAT-($lat)) , ABS(LON-($lon)) limit 1";
$result_t_max = mysqli_query($con, $sql_t_max);

    $row_t_max = mysqli_fetch_assoc($result_t_max);
        		
		$max_temp_array = [$row_t_max['Day1'],
		$row_t_max['Day2'],
		$row_t_max['Day3'],
		$row_t_max['Day4'],
		$row_t_max['Day5'],
		$row_t_max['Day6'],
		$row_t_max['Day7'],
		$row_t_max['Day8'],
		$row_t_max['Day9']
                    ];

$sql_t_min = "select * from t_min_10day order by ABS(LAT-($lat)) , ABS(LON-($lon)) limit 1";
$result_t_min = mysqli_query($con, $sql_t_min);

    $row_t_min = mysqli_fetch_assoc($result_t_min);
        		
		$min_temp_array = [$row_t_min['Day1'],
		$row_t_min['Day2'],
		$row_t_min['Day3'],
		$row_t_min['Day4'],
		$row_t_min['Day5'],
		$row_t_min['Day6'],
		$row_t_min['Day7'],
		$row_t_min['Day8'],
		$row_t_min['Day9']
                    ];

$sql_lf = "select * from lf_10day order by ABS(LAT-($lat)) , ABS(LON-($lon)) limit 1";
$result_lf = mysqli_query($con, $sql_lf);

    $row_lf = mysqli_fetch_assoc($result_lf);
        		
		$lf_array = [$row_lf['Day1'],
		$row_lf['Day2'],
		$row_lf['Day3'],
		$row_lf['Day4'],
		$row_lf['Day5'],
		$row_lf['Day6'],
		$row_lf['Day7'],
		$row_lf['Day8'],
		$row_lf['Day9']
                    ];
					
					
$sql_rf_24h = "select * from rf_24h order by ABS(lati-($lat)) , ABS(longi-($lon)) limit 1";
$result_rf_24h = mysqli_query($con, $sql_rf_24h);

    $row_rf_24h = mysqli_fetch_assoc($result_rf_24h);
        		
		$rf_24h_array = [$row_rf_24h['d1'],
		$row_rf_24h['d2'],
		$row_rf_24h['d3'],
		$row_rf_24h['d4'],
		$row_rf_24h['d5'],
		$row_rf_24h['d6'],
		$row_rf_24h['d7'],
		$row_rf_24h['d8'],
		$row_rf_24h['d9']
                    ];
	
$days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];

$ret = [] ;
for( $i = 0; $i < 7; $i ++) {
    $t = strtotime('+' . $i . ' day') ;
	//echo $t;
    if( in_array( Date('l', $t), $days ) ) {
        $ret[] = Date('d M l', $t) ;
    }
}

for ($k=0;$k<7;$k++) {
	
	if($rf_24h_array[$k] > 0 && $lf_array > 0){
		$symbol = "wether_Images/18.png";
	}else if($rf_24h_array[$k] > 0 && $lf_array == 0){
		$symbol = "wether_Images/12.png";
	}else if($rf_24h_array[$k] == 0 && $lf_array == 0){
		$symbol = "wether_Images/1.png";
	}else{
		$symbol = "wether_Images/6.png";
	}
    
	echo "
								
								 <div class='wthree-grids-row'>
                                    <ul>
                                        <li style='color: white !important;'>$ret[$k]<a href='index_1_Sinhala.php?d=$k&lat=$lat&lon=$lon'><button class='float'><li class='fa fa-angle-right' style='color: white !important;'></li><div style='margin-top: -5px !important'>More</div></button></a></li>
                                        <li style='color: white !important;' class='wthree-img'><img src='$symbol' alt=''/> </li>
                                        <li style='color: white !important;' class='wthree-temp'> $max_temp_array[$k] <sup class='degree'>°</sup></li>
                                        <li style='color: white !important;' class='wthree-temp'> $min_temp_array[$k] <sup class='degree'>°</sup></li>
                                    </ul> 
                                    <div class='clear'> </div>
                                </div>
								
								";
								
}
								
								
							
 
mysqli_close($con); 
 
 ?>