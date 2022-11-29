<?php

$current_id = get_queried_object()->ID;
$flats      = get_field( 'flats', $current_id );

$relation = $flats['relationship'];
$filter   = $flats['filter'];

$filter_room  = explode( ';', $filter['rooms'] );
$filter_floor = explode( ';', $filter['floor'] );
$filter_area  = explode( ';', $filter['area'] );

$args = array(
	'post_type'      => array('flats', 'flat-no-cont', 'ready-flats'),
	'posts_per_page' => - 1,
	'paged'          => 1,
	'orderby'        => 'id',
	'order'          => 'asc',
	'tax_query'      => array(
		array(
			'taxonomy' => 'flats_tax',
			'field'    => 'id',
			'terms'    => $relation->term_id,
			'operator' => 'IN'
		)
	),
);

?>

<?php if ( $flats['type'] == "flats" ): ?>
    <div id="flats-table" class="section section-table">
        <div class="container">
            <div class="section-heading has-line">
                <div class="heading">
                    <i class="line"
                       data-aos="fade-down"
                       data-aos-delay="400"
                       data-aos-duration="1000"
                       data-aos-easing="ease-in-sine"
                    ></i>
                    <p class="title oo"><span>Filtrowanie</span> mieszkań</p>
                </div>
                <div class="filters">
					<?php if ( ! empty( $filter['rooms'] ) ): ?>
                        <div class="filter filter-rooms">
                            <select id="flat_rooms" name="flat_rooms" class="form-control">
                                <option value="">-- Liczba pokoi --</option>
								<?php for ( $i = $filter_room[0]; $i <= $filter_room[1]; $i ++ ): ?>
                                    <option value="<?php echo $i; ?>"<?php echo isset( $_GET['flat_rooms'] ) && $_GET['flat_rooms'] == $i ? ' selected' : ''; ?>><?php echo $i; ?></option>
								<?php endfor; ?>
                            </select>
                        </div>
					<?php endif; ?>

					<?php if ( ! empty( $filter['floor'] ) ): ?>
                        <div class="filter filter-floor">
                            <select id="flat_floor" name="flat_floor" class="form-control">
                                <option value="">-- Piętro --</option>
								<?php for ( $i = $filter_floor[0]; $i <= $filter_floor[1]; $i ++ ): ?>
                                    <option value="<?php echo $i == "0" ? 'Parter' : $i; ?>"<?php echo isset( $_GET['flat_floor'] ) && $_GET['flat_floor'] == $i ? ' selected' : ''; ?>><?php echo $i == "0" ? 'Parter' : $i; ?></option>
								<?php endfor; ?>
                            </select>
                        </div>
					<?php endif; ?>
                    <?php if(is_single(4095)){ ?>
                    <input id="building-id" class="form-control" type="text" placeholder="Nr budynku" value="">
                    <?php } ?>
					<?php if ( ! empty( $filter['area'] ) ): ?>
                        <div class="filter filter-range">
                            <input id="flat_area_range" type="text" class="flat_area_range" name="flat_area_range"
                                   value="" data-column="4">
                            <input id="min" name="min" type="hidden" value="<?php echo $filter_area[0]; ?>"
                                   class="min-from"/>
                            <input id="max" name="max" type="hidden" value="<?php echo $filter_area[1]; ?>"
                                   class="min-to"/>
                        </div>
					<?php endif; ?>
                </div>
            </div>
            <div class="section-content">
                <table id="table">
                    <thead>
                    <tr role="row">
                        <th>Nr. Lokalu</th>
                        <th>Nr. Budynku</th>
                        <th>Piętro</th>
                        <th>L.pokoi</th>
                        <th>Metraż</th>
                        <th>Status</th>
                        <th>Cena</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
					$posts = new WP_Query( $args );
					while ( $posts->have_posts() ):
						$posts->the_post();
						?>
                        <tr class="<?php echo get_field( 'sold_status' ) == "0" ? 'wolne' : 'sprzedane'; ?>">
                            <td class="sorting"> 
                            <?php echo get_field( 'name' ) ?: '---'; ?></td>
                            <td class="sorting"><?php echo get_field( 'building' ) ?: '---'; ?></td>
                            <td class="sorting"><?php echo get_field( 'floor' ) == "0" ? 'Parter' : get_field( 'floor' ) ?></td>
                            <td class="sorting"><?php echo get_field( 'rooms' ) ?: '---'; ?></td>
                            <td class="sorting"><?php echo number_format( get_field( 'area' ), 2, '.', '' ); ?>
                                <span></span>
                            </td>
                            <td class="sorting"><?php echo get_field( 'sold_status' ) == "0" ? 'wolne' : 'sprzedane'; ?></td>
                            <td class="sorting"><?php echo get_field( 'price' ) ? get_field( 'price' ) . ' zł' : '---'; ?></td>
                            <td><?php echo get_field( 'sold_status' ) == "0" && get_field( 'card_link' ) ? '<a data-fancybox data-type="pdf" href="' . get_field( 'card_link' )['url'] . '">Pobierz PDF</a>' : '---'; ?></td>
                            <td><a href="#" onclick="test(event, '<?php echo get_field( 'name' ); ?>')"  class="btn btn-modal">Zapytaj o
                                    mieszkanie</a></td>        
                        </tr>
					<?php endwhile;
					wp_reset_query(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="modal-form-table" class="modal-form-table  js">
        <div class="bg"></div>
        <div class="content">
        <i class="close-modal js">x</i>
        <h2>Nr. Lokalu: <b class="nr-lok"></b></h2>
        <p class="nazwa-inw"></p>
        <div class="form">
            <?php echo do_shortcode('[contact-form-7 id="13518" title="Formularz - modal table"]'); ?>
        </div>
    </div>
<?php endif; ?>

<script>
    function test(event, name) {
        let inw = '<?php echo $relation->name; ?>'
        event.preventDefault();
        document.querySelector('#modal-form-table').classList.add('open-modal');
        document.querySelector('.nr-lok').textContent = name;
        document.querySelector('.nazwa-inw').textContent = inw ;
        document.querySelector('[name="nazwa-lokalu"]').value = name;
        document.querySelector('[name="nazwa-inwestycji"]').value = inw;

    }
    document.querySelector('.close-modal').addEventListener('click', function(event){
       document.querySelector('#modal-form-table').classList.remove('open-modal');
    })
</script>