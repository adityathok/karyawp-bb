(function($) {
    $(function() {
        
		<?php if ( $settings->photos ) : ?>
            <?php
            $slidesToShow               = $settings->slidesToShow;
            $slidesToShow_large         = $settings->slidesToShow_large?$settings->slidesToShow_large:$slidesToShow;
            $slidesToShow_medium        = $settings->slidesToShow_medium?$settings->slidesToShow_medium:$slidesToShow_large;
            $slidesToShow_responsive    = $settings->slidesToShow_responsive?$settings->slidesToShow_responsive:$slidesToShow_medium;
            ?>
            $('.fl-node-<?php echo $id; ?> .kybb-imagecarousel').slick({
                dots: <?php echo $settings->dots; ?>,
                arrows: <?php echo $settings->arrows; ?>,
                infinite: <?php echo $settings->infinite; ?>,
                speed: 300,
                slidesToShow: <?php echo $slidesToShow; ?>,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: <?php echo $slidesToShow_large; ?>,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: <?php echo $slidesToShow_medium; ?>
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: <?php echo $slidesToShow_responsive; ?>
                        }
                    }
                ]
            });
		<?php endif; ?>
	});
})(jQuery);
