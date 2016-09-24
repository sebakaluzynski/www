<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title></title
	
	<meta name="description" content="Opis w Google" />
	<meta name="keywords" content="słowa, kluczowe, wypisane, po, porzecinku" />
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link rel="stylesheet" href="css/transitions.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../dist/css/lightbox.min.css">
	
	 <!--[if lt IE 9]>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <![endif]-->
    <!--[if (gte IE 9) | (!IE)]><!-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!--<![endif]-->

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="jquery.collagePlus.js"></script>
    <script src="extras/jquery.removeWhitespace.js"></script>
    <script src="extras/jquery.collageCaption.js"></script>
    
    <!-- ************************************************************************************-->
    
 <script type="text/javascript" src="javascript/highslide-with-gallery.js"></script>
	<link rel="stylesheet" href="css/gallery.css" type="text/css" media="screen" />
    
    
    
    
  
    <script type="text/javascript">
		
			  // All images need to be loaded for this plugin to work so
    // we end up waiting for the whole window to load in this example
    $(window).load(function () {
        $(document).ready(function(){
            collage();
            $('.Collage').collageCaption();
        });
    });
	
	// Here we apply the actual CollagePlus plugin
    function collage() {
        $('.Collage').removeWhitespace().collagePlus(
            {
                'fadeSpeed'     : 1000,
                'targetHeight'  : 500,
				//'allowPartialLastRow' : true
            }
        );
    };

    // This is just for the case that the browser window is resized
    var resizeTimer = null;
    $(window).bind('resize', function() {
        // hide all the images until we resize them
        $('.Collage .Image_Wrapper').css("opacity", 0);
        // set a timer to re-apply the plugin
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(collage, 200);
    });
	
	hs.graphicsDir = 'javascript/images/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.outlineType = 'rounded-white';
	hs.fadeInOut = true;
	//hs.dimmingOpacity = 0.75;

	// Add the controlbar
	if (hs.addSlideshow) hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: .75,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});
	
	
	</script>
	
	
	
</head>

<body>

	<div class="container">
		<div class="rectangle">
			<div class="portfolio">PORTFOLIO</div>
			<div class="logo">NATALIA SOLNICA</div>
			<div class="contact">KONTAKT</div>
			<div style="clear: both;"></div>	
		</div>
		
		
		
 <section class="Collage effect-parent">
	
	
<?php	

	$katalog = "obrazki/";
	//$katalogminiaturki = "obrazki";
	$galeria = opendir( $katalog );

	$img = "Image_Wrapper";
	while($zdjecie = readdir($galeria)){

		$odczyt = pathinfo( $katalog.'/'.$zdjecie );
				
		if ( $odczyt['extension']  == 'jpg' ){
			
		$filename = "obrazki/".$zdjecie;	
		/*echo '<div class="'.$img.'"><a href="'.$filename.'"><img src="'.$filename.'" oncontextmenu="window.event.returnValue=false;"
		ondrag="window.event.returnValue=false;"
		onclick="return hs.expand(this)"/></a></div>';*/
		//echo '<div class="'.$img.'"><a href="'.$filename.'"><img src="'.$filename.'"/></a></div>';
//		echo '<a class="'.img.'" href="'.$filename.'" data-lightbox="image"><img src="'.$filename.'" /></a>'
		echo '<a class="'.$img.'" href="'.$filename.'" oncontextmenu="window.event.returnValue=false;"
		ondrag="window.event.returnValue=false;" onclick="return hs.expand(this)" ><img src="'.$filename.'" /></a>';
		
		}
	
	}
	closedir($galeria);
	
?>
	</section>
	
		

	
	<div class="footer">2015&copy;Natalia Solnic</div>

	</div>

	
</body>
</html>
