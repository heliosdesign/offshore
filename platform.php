<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>OFFSHORE | Helipad</title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Coming soon: OFFSHORE, an interactive documentary about the next chapter of oil exploration and exploitation">
    <meta name="author" content="">

    <link rel="image_src" href="images/bg_drillhead.jpg" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-35229652-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

  </head>

  <body style="overflow:hidden" class="platform">

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<header>
  <a class="volume-toggle"><i class="icon-volume-up"></i></a>
</header>

    <div id="wrapper" class="wrapper">
  		<div id="panocontainer" class="platform"></div>
  		<div class="breadcrumb"></div>

  	</div>



    <div id="inter-text" style="display: block"></div>
<!--
    <audio style="display: none" id="audio-platform" preload="auto" class="ambient" loop="loop">
      <source src="audio/Bong.ogg" type="audio/ogg" />
      <source src="audio/Helipad_Ambience_Music.mp3" type="audio/mpeg" />
    </audio>

         <audio style="display: none" id="whisper_01" volume=0 preload="auto" class="whisper" loop="loop">
      <source src="audio/Helipad_Ambiance_Music1.ogg" type="audio/ogg" />
 
    </audio>

-->

    <!-- JavaScripts -->
    <script type="text/javascript" src="js/lib/jquery.min.js"></script>
		<script type="text/javascript" src="js/lib/modernizr.min.js"></script>
		<script type="text/javascript" src="js/master-functions.js"></script>
  	<script type="text/javascript" src="js/lib/krpano/swfkrpano.js"></script>
  	<script type="text/javascript" src="js/pano-functions-html5.js"></script>


    <script>
var soundVector1 = soundVector2 = soundVector3 = 0;
var soundadjust = function(coord) {
      var convCoord =  Math.abs(coord+60%360);
      var convCoord1 =  Math.abs((coord-120)%360);

        if(convCoord < 180 ){
          soundVector1 = convCoord/180 *.07;
        }else{
          soundVector1 = (360-convCoord)/180 *.07;
        }
        if(soundVector1 < 0) soundVector1 = 0
          console.log(soundVector1)
        if(convCoord1 < 180 ){
          soundVector2 = (convCoord1)/180;
        }else{
          soundVector2 = (360-(convCoord1))/180;
        }

        if(parent.audiomaster.mix.getTrack('overlay_01') && !master.isTweeningAudio){

           parent.audiomaster.mix.tracks[0].pan(soundVector2*2-1)
           parent.audiomaster.mix.tracks[0].gain(soundVector2)
       
            parent.audiomaster.mix.getTrack('overlay_01').gain(soundVector1)
            parent.audiomaster.mix.getTrack('overlay_01').pan(soundVector1*2-1)       
           }


       }

       


      $(document).ready(function(){

      master.blankTrans()
      master.setCookie('transition','0')
		  //master.videoTrans("video/transitions/action_01.webm")

      master.setDeepLinking("platform.php")
      })

    </script>



  </body>
</html>