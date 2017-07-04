<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app ()->name;
?>
<?php
$this->widget ( 'Carousel', array (
		'items' => array (
				array (
						'image' => Yii::app ()->request->baseUrl . '/images/slider/IMG_01.jpg',
						'imageOptions' => array (
								'style' => 'margin:auto;' 
						) 
					// 'label' => 'First Thumbnail label',
					// 'caption' => 'First Caption.'
				),
				array (
						'image' => Yii::app ()->request->baseUrl . '/images/slider/IMG_02.jpg',
						'imageOptions' => array (
								'style' => 'margin:auto;' 
						) 
					// 'label' => 'Second Thumbnail label',
					// 'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
				),
				array (
						'image' => Yii::app ()->request->baseUrl . '/images/slider/IMG_03.jpg',
						'imageOptions' => array (
								'style' => 'margin:auto;' 
						) 
					// 'label' => 'Third Thumbnail label',
					// 'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
				) 
		) 
) );
?>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.touchSwipe.min.js"></script>
<script>

jQuery(function($){
$(".carousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});
});
</script>