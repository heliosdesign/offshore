	
	var isPreloaded;


	var preloader = function() {

		isPreloaded = true;


		var loaderArray = []

		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/helicopter_pano_l.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/helicopter_pano_f.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/helicopter_pano_r.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/helicopter_pano_b.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/helicopter_pano_u.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/helicopter_pano_d.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/platform_pano_l.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/platform_pano_f.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/platform_pano_r.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/platform_pano_b.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/platform_pano_u.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/platform_pano_d.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/lowerplatform_pano_l.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/lowerplatform_pano_f.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/lowerplatform_pano_r.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/lowerplatform_pano_b.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/lowerplatform_pano_u.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/lowerplatform_pano_d.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/chemicalroom_pano_l.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/chemicalroom_pano_f.png");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/chemicalroom_pano_r.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/chemicalroom_pano_b.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/chemicalroom_pano_u.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/chemicalroom_pano_d.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/controlroom_pano_l.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/controlroom_pano_f.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/controlroom_pano_r.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/controlroom_pano_b.png");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/controlroom_pano_u.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/controlroom_pano_d.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/hallway_pano_l.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/hallway_pano_f.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/hallway_pano_r.png");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/hallway_pano_b.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/hallway_pano_u.png");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/hallway_pano_d.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/subhangar_pano_l.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/subhangar_pano_f2.png");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/subhangar_pano_r2.png");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/subhangar_pano_b.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/subhangar_pano_u.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/subhangar_pano_d.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/interiorsub_pano_l.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/interiorsub_pano_f.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/interiorsub_pano_r.png");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/interiorsub_pano_b.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/interiorsub_pano_u.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/interiorsub_pano_d.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/theatre_pano_l.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/theatre_pano_f.png");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/theatre_pano_r.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/theatre_pano_b.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/theatre_pano_u.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/theatre_pano_d.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/boat_pano_l.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/boat_pano_f.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/boat_pano_r.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/boat_pano_b.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/boat_pano_u.jpg");
		loaderArray.push("http://51feb41d8c5706a8e6e7-4b718bfe00f3e21e7ec454784bd539a2.r98.cf2.rackcdn.com/boat_pano_d.jpg");

		$('body').append('<div id="panoDownloadStatus"></div>')
		$('body').append('<div id="panoDownloadStatusText"></div>')

		$('#panoDownloadStatusText').html('Building SPARTAN 208 : ')

		var loader = new PxLoader();

		var increment = window.innerWidth / loaderArray.length


		for(var i=0; i < loaderArray.length; i++) { 

		    var pxImage = new PxLoaderImage(loaderArray[i]); 
		 
		    //pxImage.imageNumber = i + 1; 
		 
		    loader.add(pxImage); 
		} 

		loader.addProgressListener(function(e) { 

			$('.breadcrumb').css('display', 'none')
			$('.breadcrumb').css('bottom', -40)

			//$('.breadcrumb').css('opacity', 0)

		   $('#panoDownloadStatus').css('width', e.completedCount * increment)

		   var progressPercent = Math.floor(e.completedCount / e.totalCount * 100)

		   $('#panoDownloadStatusText').html('Building SPARTAN 208 : ' + progressPercent + '% complete.')
		}); 

		loader.addCompletionListener(function() { 

			$('#panoDownloadStatusText').css('display', 'none')

			$('#panoDownloadStatus').animate({'bottom': '-40px'}, 500, function() {
				$('#panoDownloadStatus').css('display', 'block')
				$('.breadcrumb').css('display', 'block')
				$(".breadcrumb").animate({'bottom': '0'})	
			})	



		})
		 
		loader.start();

}













