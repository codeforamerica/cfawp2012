

<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: All Cities
*/

get_header(); ?>
<style>
.anythingControls {display:none;}
</style>
<div class="wrap clearfix" id="cities">
  <!--PARTICIPATING CITIES -->
  <div id="participating-wrap" class="clearfix">
    <div id="participating">
      <h2>CITY PARTNERS </h2>
      <div class="links"> 2011: <a href="/boston">Boston <span>&raquo;</span></a> <a href="/philadelphia">Philadelphia <span>&raquo;</span></a> <a href="/seattle">Seattle <span>&raquo;</span></a> <br />
	2012: <a href="/austin">Austin <span>&raquo;</span></a> <a href="/2012-partners/detroit">Detroit <span>&raquo;</span></a> <a href="/2012-partners/chicago">Chicago <span>&raquo;</span></a>  <a href="/2012-partners/honolulu">Honolulu <span>&raquo;</span></a>  <a href="/2012-partners/macon">Macon <span>&raquo;</span></a> <a href="/2012-partners/nola">New Orleans <span>&raquo;</span></a>  <a href="/2012-partners/philadelphia">Philadelphia <span>&raquo;</span></a>  <a href="/2012-partners/santa-cruz">Santa Cruz <span>&raquo;</span></a> <a href="http://action.codeforamerica.org/page/s/2012-city-signup">Apply for 2013 <span>&raquo;</span></a></div>
      <p>CfA connects forward-thinking cities with the talent from the web industry to develop reusable civic technology. Partnering cities will not only solve a critical problem using technology, but also help cultivate the next generation of tech-savvy, civic leaders.
	
	</p>
      <ul>
        <li><a href="/cities/model-city-projects">Read about our model city projects</a></li>
        <li><a href="/citizen-action-center">Spread the word in your city</a></li>
        <li><a href="http://action.codeforamerica.org/page/s/2012-city-signup" class="active">apply to become a cfa city</a></li>
      </ul>
    </div>
	<link rel="stylesheet" href="http://leaflet.cloudmade.com/dist/leaflet.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="../dist/leaflet.ie.css" /><![endif]-->
	<div id="map" style="width: 600px; height: 325px"></div>

	<script src="http://leaflet.cloudmade.com/dist/leaflet.js"></script>
	<script>
		var map = new L.Map('map');
		
		var cloudmadeUrl = 'http://{s}.tile.cloudmade.com/cf8ddd35acc140c4825b8dbcd42f2705/42515/256/{z}/{x}/{y}.png',
			cloudmadeAttribution = 'Map data &copy; 2011 OpenStreetMap contributors, Imagery &copy; 2011 CloudMade',
			cloudmade = new L.TileLayer(cloudmadeUrl, {maxZoom: 18, attribution: cloudmadeAttribution});
		
		map.setView(new L.LatLng(40.7607793, -111.8910474), 3).addLayer(cloudmade);
		
		var LeafIcon = L.Icon.extend({
			iconUrl: 'http://www.torontopath.com/uploads/map-pin-red.png',
			shadowUrl: 'http://leaflet.cloudmade.com/docs/images/leaf-shadow.png',
			iconSize: new L.Point(38, 40),
			shadowSize: new L.Point(68, 40),
			iconAnchor: new L.Point(22, 40),
			popupAnchor: new L.Point(-3, -76)
		});
		
		var greenIcon = new LeafIcon(),
			redIcon = new LeafIcon('http://leaflet.cloudmade.com/docs/images/leaf-red.png'),
			orangeIcon = new LeafIcon('http://leaflet.cloudmade.com/docs/images/leaf-orange.png');
		
		var marker1 = new L.Marker(new L.LatLng(41.8781136, -87.6297982));
			marker2 = new L.Marker(new L.LatLng(21.3069444, -157.8583333));
			marker3 = new L.Marker(new L.LatLng(30.267153, -97.7430608));
			marker4 = new L.Marker(new L.LatLng(36.9741171,	-122.0307963));
			marker5 = new L.Marker(new L.LatLng(39.952335, -75.163789));
			marker6 = new L.Marker(new L.LatLng(32.8406946, -83.6324022));
			marker7 = new L.Marker(new L.LatLng(42.331427, -83.0457538));
			marker8 = new L.Marker(new L.LatLng(29.9510658, -90.0715323));
			marker9 = new L.Marker(new L.LatLng(42.3584308, -71.0597732));
			marker10 = new L.Marker(new L.LatLng(47.6062095, -122.3320708));

		marker1.bindPopup("<a href='http://codeforamerica.org/2012-partner/chicago'>Chicago</a><br />2012 CfA City");
		marker2.bindPopup("<a href='http://codeforamerica.org/2012-partner/honolulu'>Honolulu</a><br />2012 CfA City");
		marker3.bindPopup("<a href='http://codeforamerica.org/2012-partner/austin'>Austin</a><br />2012 CfA City");
		marker4.bindPopup("<a href='http://codeforamerica.org/2012-partner/santa-cruz'>Santa Cruz</a><br />2012 CfA City");
		marker5.bindPopup("<a href='http://codeforamerica.org/2012-partner/philadelphia'>Philadelphia</a><br />2011-12 CfA City");
		marker6.bindPopup("<a href='http://codeforamerica.org/2012-partner/macon'>Macon</a><br />2012 CfA City");
		marker7.bindPopup("<a href='http://codeforamerica.org/2012-partner/detroit'>Detroit</a><br />2012 CfA City");
		marker8.bindPopup("<a href='http://codeforamerica.org/2012-partner/nola'>New Orleans</a><br />2012 CfA City");
		marker9.bindPopup("<a href='http://codeforamerica.org/boston'>Boston</a><br />2011 CfA City");
		marker10.bindPopup("<a href='http://codeforamerica.org/seattle'>Seattle</a><br />2011 CfA City");
		

			map.addLayer(marker1).addLayer(marker2).addLayer(marker3).addLayer(marker4).addLayer(marker5).addLayer(marker6).addLayer(marker7).addLayer(marker8).addLayer(marker9).addLayer(marker10);
		

	</script>
  </div>

  <div id="twocols-container" class="clearfix">
    <div id="maincontent" class="entry-content">
      
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


								<?php the_content(); ?>
							
								<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>


		<?php endwhile; ?>


    </div>
    <div class="right-col">
      <h3>Dates To Keep In Mind</h3>
      <h4>2012 City Application Timeline</h4>
      <p>The application process for 2013 cities will be opening in early November. For more information, see the timeline below and don’t hesitate to get in touch with any questions.</p>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr class="odd">
          <td>11/01/10</td>
          <th>Application Process<br />
            Opened <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>11/10 - 03/11</td>
          <th>City Application Period <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>03/01/11</td>
          <th>Deadline for 
            Applications <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>06/01/11</td>
          <th>Selected Cities Notified <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>06/15/11</td>
          <th>Selected Cities Announced <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>06/11 - 09/11</td>
          <th>Product Scoping and
            Contracting <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>09/15/11</td>
          <th>Product Overviews
            Announced <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>01/12</td>
          <th>New Class of Fellows
            Begins Development Cycle <span>&raquo;</span></th>
        </tr>
      </table>
    </div>
  </div>
</div>
<?php get_footer(); ?>
