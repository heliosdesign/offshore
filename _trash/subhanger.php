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

  <body style="overflow:hidden;" class="platform" data-videos="subhangar">

<header>
  <a class="volume-toggle"><i class="icon-volume-up"></i></a>
</header>

  <div id="wrapper" class="wrapper" style="position:fixed">

    <!-- <div class="pano-underlay">
      <video controls="true" width="100%" height="100%" autoplay loop = "true" style="position:absolute;" id="video-underlay" preload="auto">
         <source src="video/transitions/oil_shot.mp4" type="video/mp4" />
         <source src="video/transitions/oil_shot.mp4" type="video/mp4" />
      </video> 
    </div> -->


    <div class="underwater">  </div>

    <canvas id="walking-canvas" style="position:absolute;opacity:0" width="1200" width="800"></canvas>
    <div id="walking-canvas-click"></div>
    <!-- <div id="scroll-start" class="scroll-nav">Go Back?</div> -->
    <!-- <div id="scroll-end" class="scroll-nav">Continue?</div> -->
		<div id="panocontainer" class="subhanger"></div>


    <!-- VIDEO PLAYER -->
      <div class="video-content-wrap">
        <video class="hide" width="100%" style="position:absolute" id="video-overlay" preload="auto">
          <source/>
        </video>
        <div class="controls hide">
          <div class="play"></div>
          <div class="seek"></div>
          <div class="text"></div>
        </div>

        <a id="to-control" class="platform-nav">Close</a>
      </div>

    <!-- <div class="video-content-wrap-engine-room">
      <video controls="true" width="100%" style="position:absolute;display:block" id="video-overlay-engine-room" preload="auto">
        <source/>
      </video>
    </div> -->
  


    <div class="scroll-directions-container"><div id="scroll-directions"></div></div>
    
		<div class="breadcrumb"></div>

    <div id="walking-exit" class="platform-nav">Close</div>


	</div>

    <!-- JavaScripts -->
    <script type="text/javascript" src="js/lib/jquery.min.js"></script>
		<script type="text/javascript" src="js/lib/modernizr.min.js"></script>
		<script type="text/javascript" src="js/master-functions.js"></script>
  	<script type="text/javascript" src="js/lib/krpano/swfkrpano.js"></script>
  	<script type="text/javascript" src="js/pano-functions-html5.js"></script>


    <script>

      var krpano
      var soundVector1 = soundVector2 = soundVector3 = 0;

      var loadsecondscene = function() { 
        $('#video-underlay').fadeOut()
        console.log("load second scene")
        $('.wrapper').fadeOut(800, function() {
        krpano = document.getElementById("krpanoObject");
        krpano.call("action(loadsecondscene)")

        })
      }

      var showIpad = function(){
        $(".video-content-wrap-desktop").fadeIn(1500)
        $('#video-overlay-desktop source').attr('src', "video/transitions/cloud_shot.webm");
        $('#video-overlay-desktop video').load();
        $("#video-overlay-desktop")[0].load()
        $("#video-overlay-desktop")[0].play()
      }

      var walkthrough;

      var preload = function() {
        walkthrough.preload()
        console.log('walkthrough.preload()')
      }


      var soundadjust = function(coord,fov) {
        var convCoord =  Math.abs(coord%360);
        var convCoord1 =  Math.abs((coord-120)%360);

        if(convCoord < 180 ){
          soundVector1 = convCoord/180;
        } else {
          soundVector1 = (360-convCoord)/180;
        }

        if(parent.audiomaster.mix.getTrack('overlay_01') && !master.isTweeningAudio){
          parent.audiomaster.mix.getTrack('basetrack').pan(soundVector2*2-1)
          parent.audiomaster.mix.getTrack('overlay_01').pan(soundVector1*2-1)       
        }
                //console.log(soundVector1*2-1)
                      
        if(convCoord1 < 180 ){
          soundVector2 = (convCoord1)/180;
        }else{
          soundVector2 = (360-(convCoord1))/180;
        }


        if(parent.audiomaster.mix.getTrack('overlay_01') && !master.isTweeningAudio){
          parent.audiomaster.mix.getTrack('basetrack').pan(soundVector2*2-1)
          parent.audiomaster.mix.getTrack('overlay_01').pan(soundVector1*2-1)       
        } 

        if(convCoord > 100 && convCoord < 160){
          $("#ghost-canvas").fadeIn(2500)
        }else{
          $("#ghost-canvas").fadeOut(2500)
        }


        if(fov < 25) {
          $('#scroll-directions, #walking-exit').fadeIn()
          $('#panocontainer, .fastpan, .compass').fadeOut(500)
        } else {
          
          if(!master.overlayOpen) $('#panocontainer, .fastpan, .compass').fadeIn(500)

          $('#scroll-directions, #walking-exit').fadeOut(function(){
            $('#scroll-directions').css('top','100px') // reset scrubber position
          })

          $('#walking-canvas').css('opacity', Math.abs(1-fov/90)+.1)
        }

      }



      $(document).ready(function(){

        master.blankTrans()
        document.addEventListener( 'mousedown', function(){$('#inter-text').fadeOut(350);}, false );
        master.setDeepLinking("subhanger.php")

        var setStage = function(){

          var playTrigger = 0

          // position canvas
          var dynamicWidth = window.innerWidth;
          var dynamicHeight = dynamicWidth * .5625;
          var dynamicTop = (window.innerHeight - dynamicHeight)/2;

          walkthrough = new walkthroughFunctions(dynamicWidth,dynamicHeight,"walking-canvas","approaching",119,true)

          $("#video-overlay-engine-room").css("top",dynamicTop)
          $("#video-overlay-engine-room").css("width",window.innerWidth)
          $("#video-content-wrap-engine-room").css("width",window.innerWidth)
          $("#walking-canvas").css("top",dynamicTop)

          // Go Back
          // $("#scroll-start").click(function(){
          //   scrollTrigger = 0
          //   krpano = document.getElementById("krpanoObject");
          //   krpano.call("lookto(0,0,90,smooth(),true,true))")
          // });
          
          // Exit button
          $("#walking-exit").click(function(){
            walkthrough.scrollPos = 0
            scrollTrigger = 0
            krpano = document.getElementById("krpanoObject");
            krpano.call("lookto(0,0,90,smooth(),true,true))")

          });     

          var scrollTrigger, scrollPos
          var _id = "video/doc_content/Submersible_Rig_Requiem"

          closeWalkthroughVid = function(){
            playTrigger = 0
            $(".video-content-wrap-engine-room").fadeOut(1000,function(){
              $("#video-overlay-engine-room")[0].pause()
              parent.audiomaster.mix.setGain(1.0)
            })
            $(".compass").fadeIn()
          }

          function scrollerFunction(){

            // fade in go back button
            // if(walkthrough.scrollPos < 5){
            //   $("#scroll-start").fadeIn(1000)
            // }else{
            //   $("#scroll-start").fadeOut(700)
            // }

            if(walkthrough.scrollPos > 85 && playTrigger == 0){
              // launchVideo(_id)
              $(".compass").fadeOut()
              $(".video-content-wrap-engine-room").fadeIn(1500)
              $('#video-overlay-engine-room source').attr('src', master.cdn_video + "Subhangar_RigRequiem" + master.videoType);
              parent.audiomaster.mix.setGain(0.1)
              $("#video-overlay-engine-room")[0].load()
              $("#video-overlay-engine-room")[0].play()
              $("#video-overlay-engine-room")[0].onended = function(e) { closeWalkthroughVid() }
              playTrigger = 1
            }

            if(walkthrough.scrollPos < 85 && playTrigger == 1) {
              console.log("Closing video...")
              closeWalkthroughVid()
            }

            requestAnimationFrame(scrollerFunction)
          }
        scrollerFunction()

      }

      setStage()

      window.onresize = function(event) {
        setStage()
      } 

      })

    </script>



  </body>
</html>