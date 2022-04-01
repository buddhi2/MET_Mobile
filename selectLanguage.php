<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DEPARTMENT OF METEOROLOGY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
        <style>
            .loader {
                position: relative;
                width: 100px;
                height: 100px;
                border-radius: 50%;
                margin-top: -40% !important;
                margin: 20px auto;
                -o-border-radius: 50%;
                -ms-border-radius: 50%;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                -webkit-perspective: 780px;
                perspective: 780px;
            }
            .loader-inner {
                position: absolute;
                width: 100%;
                height: 100%;
                box-sizing: border-box;
                -o-box-sizing: border-box;
                -ms-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                border-radius: 50%;
                -o-border-radius: 50%;
                -ms-border-radius: 50%;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
            }
            .loader-inner.box1{
                left: 0%;
                top: 0%;
                animation: cssload-rotate-one 1.15s linear infinite;
                -o-animation: cssload-rotate-one 1.15s linear infinite;
                -ms-animation: cssload-rotate-one 1.15s linear infinite;
                -webkit-animation: cssload-rotate-one 1.15s linear infinite;
                -moz-animation: cssload-rotate-one 1.15s linear infinite;
                border-bottom: 3px solid #5C5EDC;
            }
            .loader-inner.box2{
                right: 0%;
                top: 0%;
                animation: cssload-rotate-two 1.15s linear infinite;
                -o-animation: cssload-rotate-two 1.15s linear infinite;
                -ms-animation: cssload-rotate-two 1.15s linear infinite;
                -webkit-animation: cssload-rotate-two 1.15s linear infinite;
                -moz-animation: cssload-rotate-two 1.15s linear infinite;
                border-right: 3px solid rgba(76, 70, 101, 0.99);
            }
            .loader-inner.box3{
                right: 0%;
                bottom: 0%;
                animation: cssload-rotate-three 1.15s linear infinite;
                -o-animation: cssload-rotate-three 1.15s linear infinite;
                -ms-animation: cssload-rotate-three 1.15s linear infinite;
                -webkit-animation: cssload-rotate-three 1.15s linear infinite;
                -moz-animation: cssload-rotate-three 1.15s linear infinite;
                border-top: 3px solid #e9908a;
            }
            @keyframes cssload-rotate-one {
                0% {
                    -webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
                    transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
                }
                100% {
                    -webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
                    transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
                }
            }
            @-webkit-keyframes cssload-rotate-one {
                0% {
                    -webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
                }
                100% {
                    -webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
                }
            }
            @keyframes cssload-rotate-two {
                0% {
                    -webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
                    transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
                }
                100% {
                    -webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
                    transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
                }
            }
            @-webkit-keyframes cssload-rotate-two {
                0% {
                    -webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
                }
                100% {
                    -webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
                }
            }
            @keyframes cssload-rotate-three {
                0% {
                    -webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
                    transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
                }
                100% {
                    -webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
                    transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
                }
            }
            @-webkit-keyframes cssload-rotate-three {
                0% {
                    -webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
                }
                100% {
                    -webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
                }
            }
            
            
            
            @media (min-width: 320px) {
                .container-login100-form-btn {
                    width: 100%;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    margin-top: -40%;
                }
                .login100-social-item{
                     margin-top: -15%;
                }
            }

            @media (min-width: 480px) {
                .container-login100-form-btn {
                    width: 100%;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    margin-top: -26%;
                }
                .login100-social-item{
                    margin-top: -10%;
                }
            }

            @media (min-width: 768px) {
                .container-login100-form-btn {
                    width: 100%;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    margin-top: 6%;
                }
                .login100-social-item{
                    margin-top: -1%;
                }
            }

            @media (min-width: 1024px) {
                .container-login100-form-btn {
                    width: 100%;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    margin-top: -16%;
                }
                .login100-social-item{
                    margin-top: -1%;
                }
            }

            @media (min-width: 1280px) {
                .container-login100-form-btn {
                    width: 100%;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    margin-top: -16%;
                }
                .login100-social-item{
                    margin-top: -1%;
                }
            }
            @media (min-width: 1920px) {
                .container-login100-form-btn {
                    width: 100%;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    margin-top: -16%;
                }
                .login100-social-item{
                    margin-top: -1%;
                }
            }

            @media (min-width: 1366px) {
                .container-login100-form-btn {
                    width: 100%;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    margin-top: -16%;
                }
                .login100-social-item{
                    margin-top: -1%;
                }
            }
        </style>
    </head>
    <body>


        <div class="container-login100" style="background-image: url('images/unnamed.jpg');">
            <div class="wrap-login100 p-l-10 p-r-10 p-t-30 p-b-10" style="background-color: transparent;">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-37" style="color: white;">
                        DEPARTMENT OF METEOROLOGY
                        <p style="color: white;font-size: 18px;font-weight: bolder">SRILANKA</p>
                    </span>
                    <div class="flex-c p-b-112">
                        <a href="#" class="login100-social-item" style="background-color: transparent;">
                            <img src="images/17-243.png">
                        </a>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn"  style="margin-bottom: 5px;"><a href="sinhalaLanguage.php" style="color: white">සිංහල</button></a>
                        <button class="login100-form-btn"  style="margin-bottom: 5px;"><a href="tamilLanguage.php" style="color: white">தமிழ் </button></a>
                        <button class="login100-form-btn"  style="margin-bottom: 5px;"><a href="englishLanguage.php" style="color: white">English</button></a>
                    </div>
                </form>
            </div>
        </div>



        <div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>

    </body>
</html>