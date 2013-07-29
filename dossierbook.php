<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta name="viewport" content="width = 1050, user-scalable = no" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- JavaScripts -->
<script type="text/javascript" src="js/lib/jquery.min.js"></script>
<script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/lib/turn/modernizr.2.5.3.min.js"></script>
</head>
<body style="background:none">

<div class="flipbook-viewport">
  <div class="container">
    <div class="flipbook">
      <div class="hard" style="background-image:url(images/folder_front.png)"></div>
      <div class="hard" style="background-image:url(images/folder_left.png)"></div>
      <div style="background-image:url(images/dossier/spartan_brief.jpg)"></div>
      <div style="background-image:url(images/dossier/blank_paper.jpg)"></div>

      <div style="background-image:url(images/dossier/01.jpg)"></div>
      <div style="background-image:url(images/dossier/blank_paper.jpg)"></div>

       <div style="background-image:url(images/dossier/02.jpg)"></div>
      <div style="background-image:url(images/dossier/blank_paper.jpg)"></div>     


       <div style="background-image:url(images/dossier/03.jpg)"></div>
      <div style="background-image:url(images/dossier/blank_paper.jpg)"></div>   


       <div style="background-image:url(images/dossier/04.jpg)"></div>
      <div style="background-image:url(images/dossier/blank_paper.jpg)"></div>   

      <div class="hard" style="background-image:url(images/folder_right.png)"></div>
      <div class="hard" style="background-image:url(images/folder_back.png)"></div>
    </div>
  </div>
</div>

<a id="close-control" class="platform-nav">Close</a>


<script type="text/javascript">




function loadApp() {


$(".platform-nav").click(function(){
  console.log("click")
  parent.master.closeOverlay()

})

  // Create the flipbook

  $('.flipbook').turn({
      // Width

      width:922,
      
      // Height

      height:600,

      // Elevation

      elevation: 50,
      
      // Enable gradients

      gradients: true,
      
      // Auto center this flipbook

      autoCenter: true

  });
}

// Load the HTML4 version if there's not CSS transform

yepnope({
  test : Modernizr.csstransforms,
  yep: ['js/lib/turn/turn.js'],
  nope: ['js/lib/turn/turn.html4.min.js'],
  both: ['css/basicbook.css'],
  complete: loadApp
});

</script>

</body>
</html>