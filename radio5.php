

<!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-9994729-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-9994729-1'), { 'optimize_id': 'GTM-N9XR6RG' };
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="icon" type="image/png" sizes="192x192" href="android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="256x256" href="android-chrome-256x256.png">
<link rel="manifest" href="site.webmanifest">
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content="#ffffff">
    <title>SaltyDogRadio</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
        integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Quicksand" rel="stylesheet">
 
</head>



<body>
    <!-- 
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'> -->
    <style>
        .radio-container {


            height: 90%;
            width: 90%;
            text-align: center;
        }

        .my-container {


            background-image: url("radio5.png") !important;
            background-repeat: no-repeat;
            background-size: cover;
            /* border: 5px solid rgb(167, 245, 232); */

            height: 600px;
            width: 300px;



            margin: 0;
            position: relative;
            text-align: center;

        }

        .a {
            padding: 100px;
        }


        h2 {

            font-size: .9em;
            font-family: 'Baloo Bhaina', cursive;
        }

        body {
            color: rgb(4, 4, 51);
background-color:#E3F4FA;
            max-height: 700px;
            max-width: 400px;
        }

  .btn-secondary {
    background: white;
  
    color: rgb(4, 4, 51);
    white-space: normal !important;
    font-size: .6em !important;
    font-family: 'Baloo Bhaina', cursive;
    text-transform: uppercase;
    margin: 4px;
    border: 1px solid rgb(4, 4, 51);   
    box-shadow: 5px 5px 5px black;
   
}
    </style>
    </head>



    <body>





        <!-- <img src="../images/NEW HEADERS/RADIO.jpg" style="width:100%; height:auto; margin-top: 40px; margin-bottom: 10px"
            alt="Banner of Overhead drone shot of salty dog cafe in south beach, with salty dog logo and events written on it."> -->


        <div class="container justify-content-center">


            <div class="my-container">



                <div class="row">
                    <div class="col" style="padding-top: 5px">
                    <audio src="http://98.101.223.10:8011" id="my_audio" loop="loop"></audio>
  <script type="text/javascript">
    window.onload=function(){
      document.getElementById("my_audio").play();
    }
  </script>

                        <!-- <audio id="radioplayer" src="http://98.101.223.10:8011" autoplay="autoplay"></audio> -->
                        <a href="#" onclick="document.getElementById('radioplayer').play()"><button type="button"
                                class="btn btn-secondary btn-sm">PLAY!</button></a>
                        <a href="#" onclick="document.getElementById('radioplayer').pause()"><button type="button"
                                class="btn btn-secondary btn-sm">PAUSE!</button></a>
                    </div>



                </div>

                <div class="row">
                    <div class="col" style="padding-top: 5px">
                        <input id="volume" name="volume" min="0" max="1" step="0.1" type="range"
                            onchange="setVolume()" />
                        <label for="volume" style="color: black!important">Volume</label>
                    </div>



                </div>
            </div>

            <script type="text/javascript">
                function setVolume() {
                    document.getElementById("radioplayer").volume
                        = document.getElementById('volume').value;
                }
            </script>



        </div>



    </body>

</html>