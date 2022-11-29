<?php
$locations   = get_field( 'locations' );
$points      = get_field( 'points' );
$description = get_field( 'locationDescription' );
?>
<?php if ( ! empty( $points ) ): ?>
    <div class="section section-location">
        <div class="section-location__panel">
            <article>
                <div class="section-heading">
                    <i class="line"
                       data-aos="fade-down"
                       data-aos-delay="400"
                       data-aos-duration="1000"
                       data-aos-easing="ease-in-sine"
                    ></i>
                    <p class="title">Lokalizacja</p>
                </div>
                <div class="section-content">
					<?php echo $description; ?>
                    <div class="section-location__points">
                        <div class="row">
							<?php foreach ( $points as $point ): ?>
                                <?php if( $point['icon']) { ?>
                                <div class="col-4 text-center ">
									<div class="item">
										<?php echo wp_get_attachment_image( $point['icon'], 'full' ); ?>
                                        <p><?php echo $point['name']; ?></p>
                                    </div>
                                </div>
                                <?php } ?>
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="section-location__map">
            <div class="map-container">
                <div id="map"></div>
            </div>
        </div>
    </div>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ1mwTkz-wO4aLMgXbMYusMk6TbM2p3jQ&callback=initMap"></script>

    <script>
        var map;

        var myStyle = [
            {
                featureType: "poi",
                elementType: "labels",
                stylers: [
                    {visibility: "off"}
                ]
            }
        ];

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: <?php echo $locations['zoom']; ?>,
                center: new google.maps.LatLng(<?php echo $locations['lat']; ?>, <?php echo $locations['lng']; ?>),
                scrollwheel: false,
                zoomControl: true
            });

            var features = [
                {
                    position: new google.maps.LatLng(<?php echo $locations['lat']; ?>, <?php echo $locations['lng']; ?>),
                    icon: '<?php echo get_template_directory_uri(); ?>/assets/images/icons/marker.png'
                },
				<?php foreach($points as $point): ?>
                {
                    <?php if( $point['icon']) { ?>
                    position: new google.maps.LatLng(<?php echo $point['point']['lat']; ?>, <?php echo $point['point']['lng']; ?>),
                
                    icon: '<?php echo wp_get_attachment_image_url( $point['icon'], 'full' ); ?>'
                    <?php } ?>
                },
				<?php endforeach; ?>
            ];

            features.forEach(function (feature) {
                var marker = new google.maps.Marker({
                    position: feature.position,
                    icon: feature.icon,
                    map: map
                });
            });

            map.set('styles', [{
                "featureType": "landscape",
                "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]
            }, {
                "featureType": "poi",
                "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]
            }, {
                "featureType": "road.highway",
                "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
            }, {
                "featureType": "road.arterial",
                "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]
            }, {
                "featureType": "road.local",
                "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]
            }, {
                "featureType": "transit",
                "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
            }, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]
            }, {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]
            }]);

        }

    </script>
<?php endif; ?>