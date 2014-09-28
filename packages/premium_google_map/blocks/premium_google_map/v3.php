<?php   defined('C5_EXECUTE') or die(_("Access Denied.")); 
$c = Page::getCurrentPage();
?>
<style>
#googleAdvancedMapCanvas<?php  echo $bID?>{ width:<?php  echo ($w)?$w:'100%'?>; border:0px none; height:<?php  echo ($h)?$h:'400px'?>;}
</style>   
<script type="text/javascript"> 
function googleMapInit<?php  echo $bID?>() { 
	try{
		var geoXml<?php  echo $bID?>=null;

		var latlng = new google.maps.LatLng(<?php  echo $latitude?>, <?php  echo $longitude?>);
		//var mapControl = google.maps.MapTypeControlOptions();
	    var mapOptions = {
	      zoom: <?php  echo $zoom?>,
	      center: latlng,
	      mapTypeId: google.maps.MapTypeId.<?php  echo $map_type_constant?>,
	      mapTypeControl: true,
	      navigationControl: true,
	      navigationControlOptions: {style: google.maps.NavigationControlStyle.ZOOM_PAN},
	      streetViewControl: <?php  echo ($streetview?'true':'false')?>
		};
	    
	    var map = new google.maps.Map(document.getElementById('googleAdvancedMapCanvas<?php  echo $bID?>'), mapOptions);
	    <?php  
		if( strlen($kml_file_path) ){ ?>
			geoXml<?php  echo $bID?> = new google.maps.KmlLayer("<?php  echo $kml_file_path; ?>");			
			geoXml<?php  echo $bID?>.setMap(map);

			/* reset the zoom if the kml doesn't specify a lookat param */
			google.maps.event.addListenerOnce(geoXml<?php  echo $bID?>, "defaultviewport_changed", function() {
			    google.maps.event.addListenerOnce(map, "bounds_changed", function() {
			    	geoXml<?php  echo $bID?>.set('preserveViewport', true);
			    	if(map.getZoom() >= 20) {
						map.setZoom(<?php  echo $zoom?>);
				    }
				});
			}); 
									
		<?php   } ?>

	return map;

	}catch(e){} 
}
</script>
<?php   if( strlen($title)>0){ ?><h3><?php  echo $title?></h3><?php   } ?>
<div id="googleAdvancedMapCanvas<?php  echo $bID?>" class="googleAdvancedMapCanvas"></div>
<?php   if(strlen($kml_file_path) && $kml_link){ ?>
	<div class="ccm-note"><a href="<?php  echo $this->url('/download_file', $kml_fID)?>" target="_blank">Download KML for Google Earth</a></div>
<?php   } ?>
<script type="text/javascript">
$(function() {
	if(typeof(window.ccm_gpMaps) == 'undefined') {
		window.ccm_gpMaps = new Array();
	}
	window.ccm_gpMaps.push(googleMapInit<?php  echo $bID?>());
});
</script>