$(document).ready(function () {

    // Resive video
    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');
        
    $(window).on('resize', function () {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

    function scaleVideoContainer() {

        var height = $(window).height(),
            unitHeight = parseInt(height) + 'px';
        $('.homepage-hero-module').css('height', unitHeight);

	}

	function initBannerVideoSize(element) {
    
        $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

	}

	function scaleBannerVideoSize(element){

	    var windowWidth = $(window).width(),
	        windowHeight = $(window).height(),
	        videoWidth,
	        videoHeight;
	    
	    $(element).each(function(){
	        var videoAspectRatio = $(this).data('height')/$(this).data('width'),
	            windowAspectRatio = windowHeight/windowWidth;

	        if (videoAspectRatio > windowAspectRatio) {
	            videoWidth = windowWidth;
	           
	            $(this).css({'top' : -(videoHeight - windowHeight) / 2 + 'px', 'margin-left' : 0});
	        } else {
	            videoHeight = windowHeight;
	            videoWidth = videoHeight / videoAspectRatio;
	            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
	        }

	        $(this).width(videoWidth).height(videoHeight);

	        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');
	        
            console.log(videoWidth);
            console.log(videoHeight);
	    });
	}
	
});


jQuery(function ($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "https://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);
});

function initialize() {
    var map,
    bounds = new google.maps.LatLngBounds(),
    mapOptions = {
        mapTypeId: 'roadmap',
        scrollwheel: false,
        center: {lat: 8.9848, lng: 4.5624},
        draggable: true,
        disableDefaultUI: true
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
        ['Water View, Ilorin, Kwara, Nigeria', 8.48714356,4.58134174],
        ['Ajasse Ipo, Kwara, Nigeria', 8.2458715,4.8118909]
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' + '<h3>Flower garden</h3>' +
        '<p>This is an ongoing Project of KWSG, .</p>' +        '</div>'],
        ['<div class="info_content">' +
        '<h3>Ajasse Ipo</h3>' +
        '<p></p>' +
        '</div>']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for (i = 0; i < markers.length; i++) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(10);
        google.maps.event.removeListener(boundsListener);
    });
    
}


function shuffler() {
    var $grid = $('.grid'),
        $sizer = $grid.find('.shuffle__sizer'),
        $filterType = $('#filter input[name="filter"]');

    $grid.shuffle({
        itemSelector: '.portfolio-item',
        sizer: $sizer
    });

    $filterType.change(function(e) {
        var group = $('#filter input[name="filter"]:checked').val();

        $grid.shuffle('shuffle', group);

        $('label.btn-main').removeClass('btn-main');
        $('input[name="filter"]:checked').parent().addClass('btn-main');
    });
}