<?php
include('connection/connection_mobile.php');

$lat = $_GET['lat'];
$lon = $_GET['lon'];

$sql = "SELECT
    id,
    name,
	ST_X(point) AS 'latitude',
    ST_Y(point) AS 'longitude',
    (
        ST_Length(
            LineString(
                point, 
                ST_GeomFromText('POINT($lon $lat)')
            )
        )
    ) AS distance
FROM locations ORDER BY distance ASC LIMIT 1";


$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);


echo $row['name'];
?>