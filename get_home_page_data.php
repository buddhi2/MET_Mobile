<?php
include('connection/connection_mobile.php');

$lat = "8.3341434";
$lon = "81.3254";
$sql_t_max = "select * from t_max_10day order by ABS(LAT-($lat)) , ABS(LON-($lon)) limit 1";
$result_t_max = mysqli_query($con, $sql_t_max);

$data_array = array();

    $row_t_max = mysqli_fetch_assoc($result_t_max);
        		
		$max_temp_array = array(
                        "Day1" => $row_t_max['Day1'],
                        "Day2" => $row_t_max['Day2'],
                        "Day3" => $row_t_max['Day3'],
                        "Day4" => $row_t_max['Day4'],
                        "Day5" => $row_t_max['Day5'],
                        "Day6" => $row_t_max['Day6'],
                        "Day7" => $row_t_max['Day7'],
                        "Day8" => $row_t_max['Day8'],
                        "Day9" => $row_t_max['Day9'],
                    );
					
		array_push($data_array, $max_temp_array);

	
print json_encode($data_array);  
mysqli_close($con); 
 
 ?>