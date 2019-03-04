<?php

/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
$this->title = 'PASCA SARJANA STMIK HANDAYANI'
?>

	<|-- slide pertama -->
	<div class="col-md-12">
	
		<?php
			echo Carousel::widget([
				'items'=> [
					['content' => 'img src="image/corousel1.jpg" width="1200px" height="700px"/>';
					 'options' => ['class' =>'carousel-caption'],
					 'caption' => '<h4>Pasca Sarjana Stmik Handayani Makasaar Th 2017</h4>',
					],
					['content' => 'img src="image/corousel2.jpg" width="1200px" height="700px"/>';
					 'options' => ['class' =>'carousel-caption'],
					 'caption' => '<h4>Pasca Sarjana Stmik Handayani Makasaar Th 2017</h4>',
					],
					['content' => 'img src="image/corousel3.jpg" width="1200px" height="700px"/>';
					 'options' => ['class' =>'carousel-caption'],
					 'caption' => '<h4>Pasca Sarjana Stmik Handayani Makasaar Th 2017</h4>',
					],
				]
			]);
		?>
	</div>	