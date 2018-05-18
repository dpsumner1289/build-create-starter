<?php
/* Template Name: Location Page */

get_header();

$title = strtolower(get_the_title());

$flex_contents = get_field('content_rows');
global $flex_content;
?>

<?php
$args = array(
'post_type'   => 'location',
'post_status' => 'publish',
'title' => $title,
);

if(!empty($flex_contents)): 
    foreach($flex_contents as $content):
        $flex_content = $content;
        get_template_part('template-parts/flex', $flex_content['acf_fc_layout']);	
    endforeach; 
endif;
?>
<div class="two-column-row">
    <div class="container conatiner-lg flex vc row">
        <?php
        $location = new WP_Query( $args );
        if( $location->have_posts() ) :
            while( $location->have_posts() ) :
                $location->the_post();
                $location_address = get_field('location_address');
                $address = get_field('address');
                ?>
                <div class="item_1_2">
                <?php
                if( !empty($location_address) ): ?>
                    <div class="acf-map">
                        <div class="marker" data-lat="<?php echo $location_address['lat']; ?>" data-lng="<?php echo $location_address['lng']; ?>"></div>
                    </div> <!--/acf-map-->
                <?php endif; ?>
                </div><!-- /item_1_2 -->
                <div class="item_1_2">
                    <?php if(!empty($address)){ echo '<div style="font-size:20px;">'.$address.'</div>';} ?>   
                </div><!-- /item_1_2 -->
                <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div> <!--/container-->
</div> <!-- /two-column-row -->
    <style type="text/css">
        .acf-map {
            width: 100%;
            height: 400px;
            border: #ccc solid 1px;
            margin: 20px 0;
        }

        /* fixes potential theme css conflict */

        .acf-map img {
            max-width: inherit !important;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMTPBPsVC0sYA8xjZ6ukXaqLvtr7xywcg"></script>
    <script type="text/javascript">
        (function ($) {

            /*
             *  new_map
             *
             *  This function will render a Google Map onto the selected jQuery element
             *
             *  @type	function
             *  @date	8/11/2013
             *  @since	4.3.0
             *
             *  @param	$el (jQuery element)
             *  @return	n/a
             */

            function new_map($el) {

                // var
                var $markers = $el.find('.marker');

                // vars
                var args = {
                    zoom: 16,
                    center: new google.maps.LatLng(0, 0),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                // create map
                var map = new google.maps.Map($el[0], args);

                // add a markers reference
                map.markers = [];

                // add markers
                $markers.each(function () {
                    add_marker($(this), map);
                });

                // center map
                center_map(map);

                // return
                return map;
            }

            /*
             *  add_marker
             *
             *  This function will add a marker to the selected Google Map
             *
             *  @type	function
             *  @date	8/11/2013
             *  @since	4.3.0
             *
             *  @param	$marker (jQuery element)
             *  @param	map (Google Map object)
             *  @return	n/a
             */

            function add_marker($marker, map) {

                // var
                var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

                // create marker
                var marker = new google.maps.Marker({
                    position: latlng,
                    map: map
                });

                // add to array
                map.markers.push(marker);

                // if marker contains HTML, add it to an infoWindow
                if ($marker.html()) {
                    // create info window
                    var infowindow = new google.maps.InfoWindow({
                        content: $marker.html()
                    });

                    // show info window when marker is clicked
                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.open(map, marker);
                    });
                }
            }

            /*
             *  center_map
             *
             *  This function will center the map, showing all markers attached to this map
             *
             *  @type	function
             *  @date	8/11/2013
             *  @since	4.3.0
             *
             *  @param	map (Google Map object)
             *  @return	n/a
             */

            function center_map(map) {

                // vars
                var bounds = new google.maps.LatLngBounds();

                // loop through all markers and create bounds
                $.each(map.markers, function (i, marker) {
                    var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
                    bounds.extend(latlng);
                });

                // only 1 marker?
                if (map.markers.length == 1) {
                    // set center of map
                    map.setCenter(bounds.getCenter());
                    map.setZoom(16);
                } else {
                    // fit to bounds
                    map.fitBounds(bounds);
                }
            }

            /*
             *  document ready
             *
             *  This function will render each map when the document is ready (page has loaded)
             *
             *  @type	function
             *  @date	8/11/2013
             *  @since	5.0.0
             *
             *  @param	n/a
             *  @return	n/a
             */
            // global var
            var map = null;

            $(document).ready(function () {
                $('.acf-map').each(function () {
                    // create map
                    map = new_map($(this));
                });
            });
        })(jQuery);
    </script>

<?php get_footer(); ?>