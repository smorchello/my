<?php

class Carousel extends TBCarousel {
	public function run() {
		
		$id = $this->htmlOptions ['id'];
		
		echo CHtml::openTag ( 'div', $this->htmlOptions );
		$this->renderIndicators ();
		echo '<div class="carousel-inner">';
		$this->renderItems ( $this->items );
		echo '</div>';
		
		//if ($this->displayPrevAndNext) {
			//echo '<a class="carousel-control left" href="#' . $id . '" data-slide="prev">' . $this->prevLabel . '</a>';
			//echo '<a class="carousel-control right" href="#' . $id . '" data-slide="next">' . $this->nextLabel . '</a>';
		//}
		
		echo '</div>';
		
		/** @var CClientScript $cs */
		$cs = Yii::app ()->getClientScript ();
		$options = ! empty ( $this->options ) ? CJavaScript::encode ( $this->options ) : '';
		$cs->registerScript ( __CLASS__ . '#' . $id, "jQuery('#{$id}').carousel({$options});" );
		
		foreach ( $this->events as $name => $handler ) {
			$handler = CJavaScript::encode ( $handler );
			$cs->registerScript ( __CLASS__ . '#' . $id . '_' . $name, "jQuery('#{$id}').on('{$name}', {$handler});" );
		}
	}
}
