

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

    </head>



    <body>





        <!-- <img src="../images/NEW HEADERS/RADIO.jpg" style="width:100%; height:auto; margin-top: 40px; margin-bottom: 10px"
            alt="Banner of Overhead drone shot of salty dog cafe in south beach, with salty dog logo and events written on it."> -->


        <div class="container justify-content-center">


            <div class="my-container">



                <div class="row">
                    <div class="col" style="padding-top: 5px">

                        <audio id="radioplayer" src="http://98.101.223.10:8011" autoplay="autoplay"></audio>
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


            <!-- Read json and display title of track using php. This will print the item on your page. I use this in a shortcode via a shortcode plugin. -->
<div class="row">
                    <div class="col" style="padding-top: 5px">
<?php
$json_string = 'https://api.acrcloud.com/v1/monitor-streams/s-DN5fdGT/results?access_key=63100295363396bdeac78ab8df282c4a';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata,true);
print_r($obj[0]['metadata']['music'][0]['title']);
?>

<!-- Read json and display artist of track using php. This will print the item on your page. I use this in a shortcode via a shortcode plugin. -->

<?php
$json_string = 'https://api.acrcloud.com/v1/monitor-streams/s-DN5fdGT/results?access_key=63100295363396bdeac78ab8df282c4a';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata,true);
print_r($obj[0]['metadata']['music'][0]['artists'][0]['name']);
?>
</div>
</div>
<!-- //You can use these together easily across any standard PHP based site e.g., on a Wordpress site
//Explanation of string url
//https://api.acrcloud.com/v1/monitor-streams/ this is the standard stream url for monitoring
//s-bVX73QK/ this is the ARC Cloud stream id available from your ARC account once set up in the console
//results?access_key= enter this is to allow it to run the key in order to access the data
//4709cb1d4bf05a8e782034797fxxxxxx this is the key linked with the stream with the stream id above. 
//The key can be found in the console under the Broadcast Monitring tab on the left in your ACR console
//You can see the results for our site being shown on our front page at https://fresh927.com.au -->


            <script type="text/javascript">
                function setVolume() {
                    document.getElementById("radioplayer").volume
                        = document.getElementById('volume').value;
                }
            </script>



        </div>



    </body>

</html>