
 <script>
  function getDayWetherSingleLocation(lat,lon) {
			
			ajaxObject = new XMLHttpRequest();			
			ajaxObject.onreadystatechange = function(){		
					if(ajaxObject.readyState==4 && ajaxObject.status==200){	
							//var mainStationData = JSON.parse(ajaxObject.responseText);
							
							document.getElementById("data_content").innerHTML = ajaxObject.responseText;
							//console.log(ajaxObject.responseText);
							}
						}
					ajaxObject.open("GET","getDayWetherSingleLocation_English.php?lat="+lat+"&lon="+lon,true);
			ajaxObject.send(); 
    }
 
 
   function getCityName(lat,lon) {
			
			ajaxObject1 = new XMLHttpRequest();			
			ajaxObject1.onreadystatechange = function(){		
					if(ajaxObject1.readyState==4 && ajaxObject1.status==200){	
							//var mainStationData = JSON.parse(ajaxObject.responseText);
							
							document.getElementById("currentLocation").innerHTML = ajaxObject1.responseText;
							//console.log(ajaxObject.responseText);
							}
						}
					ajaxObject1.open("GET","get_city_name.php?lat="+lat+"&lon="+lon,true);
			ajaxObject1.send(); 
    }
 </script>
 <!DOCTYPE html>
<html>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <title>DEPARTMENT OF METEOROLOGY</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Regular Weather Report template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

        <!-- Custom Theme files -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
        <!-- //Custom Theme files -->
        <!-- web font -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- //web font --> 
    </head>
    <body onload="startTime()" style="height:700px !important;background-image: url('images/unnamed.jpg')">
        <!-- main -->
        <div class="main" style="height: 100% !important;margin-top:-6%">
            <div class="main-wthree-row" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
                <div class="agileits-top">
                    <div class="agileinfo-top-row">
                        <div class="agileinfo-top-img">
                            <span> </span>
                        </div><br>
                        <h3><sup class="degree"></sup><span></span></h3>
                        <p id="currentLocation">Location..</p>
                        <div class="agileinfo-top-time"> 
                            <div class="date-time">
                                <div class="dmy">
                                    <div id="txt"></div>
                                    <div class="date">
                                        <!-- Date-JavaScript -->
                                        <script type="text/javascript">
                                            var mydate = new Date()
                                            var year = mydate.getYear()
                                            if (year < 1000)
                                                year += 1900
                                            var day = mydate.getDay()
                                            var month = mydate.getMonth()
                                            var daym = mydate.getDate()
                                            if (daym < 10)
                                                daym = "0" + daym
                                            var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
                                            var montharray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
                                            document.write("" + dayarray[day] + ", " + montharray[month] + " " + daym + ", " + year + "")
                                        </script>
                                        <!-- //Date-JavaScript -->
                                    </div>
                                </div> 
                                <div class="clear"></div>
                            </div>  
                        </div>
                    </div>
                </div>

 <link rel="stylesheet" href="https://js.arcgis.com/4.19/esri/themes/light/main.css" />
    <script src="https://js.arcgis.com/4.19/"></script>



<script>
      require(["esri/Map", "esri/views/MapView", "esri/widgets/Search", "esri/widgets/Locate",
        "esri/tasks/Locator",], function(Map, MapView, Search, Locate, Locator) {
        var map = new Map({
          basemap: "osm"
        });

        const view = new MapView({
      container: "viewDiv",
      map: map,
      center: [-122.3321,47.6062],
      zoom: 12
    });


	var searchWidget = new Search({
		sources: [{
      locator: new Locator({ url: "https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer"}),
      countryCode:"LKA",
      singleLineFieldName: "SingleLine",
      name: "Sri Lanka Geocoding Service",
      localSearchOptions: {
        minScale: 300000,
        distance: 50000
      },
      placeholder: "Search Sri Lanka",
      maxResults: 3,
      maxSuggestions: 6,
      suggestionsEnabled: true,
      minSuggestCharacters: 0
  }],
        view: view,
		popupEnabled: false,
		includeDefaultSources: false,
		container: "search_box"
      });
	  
	  

        // Add the search widget to the top right corner of the view
        view.ui.add(searchWidget, "search_box");
	searchWidget.on("search-complete", function(event){
		//resultsLayer.removeAll();
		//console.log("Results of the search: ", event.searchTerm);
		
		document.getElementById("currentLocation").innerHTML = event.searchTerm;
		var lat = (event.results[0].results[0].feature.geometry.latitude);
		var lon = (event.results[0].results[0].feature.geometry.longitude);
		getDayWetherSingleLocation(lat,lon);
	});
	
	
      });
	  
	  
	  
	  
	  function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
 console.log("Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude);
  
  getDayWetherSingleLocation(position.coords.latitude,position.coords.longitude);
  getCityName(position.coords.latitude,position.coords.longitude);
}


 getLocation();




    </script>

<div style="position:absolute; left:20px; top:80px; z-Index:1000; width:1px; height:1px"  id="viewDiv"></div>
<div style="position:absolute; left:20px; top:80px; z-Index:1001; width:260px; height:30px"  id="search_box">
	
</div>
                <div class="w3ls-bottom2" style="background-color:#00569E !important;">	 
                    <div class="ac-container2" >
                        <article class="ac-small">
                            <div class="wthree-grids">
                                 <div class="wthree-grids-row">
                                    <ul class="top" style="float: right">
                                        <li style="color: white !important;margin-right: 30px" class="wthree-temp degree">Max</li>
                                        <li style="color: white !important;" class="wthree-temp degree">Min</li>
                                    </ul> 
                                    <div class="clear"> </div>
                                </div>
								<div id="data_content">
								
								
                                
                            </div>
                            </div>
                        </article>
                    </div>  
                </div>	
<!--

                <div class="w3ls-bottom" >
                    <h2 style="color: #00569E;">Today's Weather </h2>
                    <div id="owl-demo" class="owl-carousel owl-theme" >
                        <div class="item">
                            <div class="biseller-column">
                                <p>10AM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/1.png" alt=""/>
                                </a> 
                                <p>20<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="biseller-column">
                                <p>11AM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/1.png" alt=""/>
                                </a> 
                                <p>22<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="biseller-column">
                                <p>12PM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/2.png" alt=""/>
                                </a> 
                                <p>22<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="biseller-column">
                                <p>1PM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/3.png" alt=""/>
                                </a> 
                                <p>24<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="biseller-column">
                                <p>2PM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/4.png" alt=""/>
                                </a> 
                                <p>23<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="biseller-column">
                                <p> 3PM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/4.png" alt=""/>
                                </a> 
                                <p>22<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="biseller-column">
                                <p>4PM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/2.png" alt=""/>
                                </a> 
                                <p>20<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="biseller-column">
                                <p>5PM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/2.png" alt=""/>
                                </a> 
                                <p>20<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="biseller-column">
                                <p>6PM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/1.png" alt=""/>
                                </a> 
                                <p>20<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="biseller-column">
                                <p>7PM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/1.png" alt=""/>
                                </a> 
                                <p>20<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="biseller-column">
                                <p>8PM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/1.png" alt=""/>
                                </a> 
                                <p>20<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="biseller-column">
                                <p>9PM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/1.png" alt=""/>
                                </a> 
                                <p>20<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="biseller-column">
                                <p>10PM</p>
                                <a class="lightbox" href="#">
                                    <img src="images/1.png" alt=""/>
                                </a> 
                                <p>20<sup class="degree">°</sup></p>
                            </div>
                        </div> 
                    </div>  
                </div>
				-->
            </div>	
        </div>	
        <!-- //main --> 

        <!-- js -->
        <script src="js/jquery-1.9.1.min.js"></script> 
        <script src="js/owl.carousel.js"></script>
        <script>
            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    autoPlay: 3000, //Set AutoPlay to 3 seconds
                    items: 6,
                    itemsDesktop: [640, 5],
                    itemsDesktopSmall: [414, 4]
                });
            });
        </script> 
        <!-- //js -->

        <!-- Time-JavaScript -->
        <script>
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML =
                        h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i
                }
                ; // add zero in front of numbers < 10
                return i;
            }
        </script>
        <!-- //Time-JavaScript -->
    </body>
</html>