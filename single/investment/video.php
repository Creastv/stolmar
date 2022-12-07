<?php $video = get_field( 'video' ); ?>
<div class="section section-video text-center ">
    <div class="container">
        <div class="video-container">
            <?php  echo $video; ?>
        </div>
        <style>
            .video-container {
                position: relative;
                padding-bottom: 56.25%;
            }

            .video-container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
    </div>
</div>