<?php $timelines = get_field( 'timelines' ); ?>

<?php if ( ! empty( $timelines ) ): ?>
    <div class="section section-timeline">
        <div class="container">
            <div class="section-heading">
                <i class="line"
                ></i>
                <div>
                    <p class="title"><span>Sprawdź postępy w budowie</span> na osi czasu</p>
                    
                    <?php $i = 1; ?>
                    <?php  if(count($timelines) > '1') { ?>
                    <select id="select-step" name="select-step">
						<?php foreach ( $timelines as $timeline ): ?>
                            <option value="<?php echo $i; ?>"><?php echo $timeline['etap']; ?></option>
							<?php $i ++; endforeach; ?>
                    </select>
                    <?php } ?>
                  
                </div>
            </div>
            <div class="section-content">
                <p class="stage">Postęp prac wybranego etapu: <span>etap 1</span></p>
				<?php $i = 1;
				foreach ( $timelines as $timeline ):
                    $result = round((100 * $timeline['progress'])  / 7);
                    ?>
                    <div class="timeline t<?php echo $i; ?>">
                        <div class="timeline__progress"
                             style="width: <?php echo $result; ?>%"
                        ></div>
                        <div class="timeline__schema">
                            <div class="timeline__stage stage-1 <?php echo $timeline['progress'] > 1 ? 'is-active' : ''; ?>" >
                                <div class="timeline__info">
                                    <p>Dokumentacja<br> budowy</p>
                                </div>
                            </div>
                            <div class="timeline__stage stage-2 <?php echo $timeline['progress'] > 2 ? 'is-active' : ''; ?>" >
                                <p>Rozpoczęcie<br> prac budowlanych</p>
                            </div>
                            <div class="timeline__stage stage-3 <?php echo $timeline['progress'] > 3 ? 'is-active' : ''; ?>">
                                <p>Stan surowy<br> otwarty</p>
                            </div>
                            <div class="timeline__stage stage-4 <?php echo $timeline['progress'] > 4 ? 'is-active' : ''; ?>" >
                                <p>Stan surowy<br> zamknięty</p>
                            </div>
                            <div class="timeline__stage stage-5 <?php echo $timeline['progress'] > 5 ? 'is-active' : ''; ?>" >
                                <p>Zamknięcie<br> prac na budowie</p>
                            </div>
                            <div class="timeline__stage stage-6 <?php echo $timeline['progress'] > 6 ? 'is-active' : ''; ?>" >
                                <p>Pozwolenie na<br> użytkowanie</p>
                            </div>
                            <div class="timeline__stage stage-7 <?php echo $timeline['progress'] > 7 ? 'is-active' : ''; ?>" >
                                <p>Przekazywanie <br> kluczy</p>
                            </div>
                        </div>
                    </div>
					<?php $i ++; endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>