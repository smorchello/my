<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon"
	href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico"
	type="image/vnd.microsoft.icon" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/font/font-awesome/css/font-awesome.min.css">
<!--<script src="//code.jquery.com/jquery-1.9.1.min.js"></script>  -->

<title><?php echo CHtml::encode($this->pageTitle); ?></title>


</head>

<body>


	<header id="header" class="container">
		<div class="row">
			<div class="col-sm-3 hidden-xs text-left">
				<a class="logo pull-left" href="/" title="Главная"> <img
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png"
					alt="Главная">
				</a>
			</div>
			<div class="col-sm-6 hidden-xs text-center">
				<a href="/" class="header-title" title="Anastasia Bant">Anastasia
					Bant</a>
				<p class="header-title-sup">cвадебный стилист - визажист</p>
			</div>
			<div class="col-sm-3 hidden-xs text-right social">
				<div class="phone">
					<i class="fa fa-phone" aria-hidden="true"></i> +7 (920) 423 35 26
				</div>
				<a href="https://vk.com/hair.bant" class="vkontakte" target="_blank"
					title="Группа вконтакте"><i class="fa fa-vk" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/hair.bant/" target="_blank"
					title="Инстаграм hair.bant"><i class="fa fa-camera-retro"
					aria-hidden="true"></i></a> <a href="mailto:an.bant@yandex.ru"
					title="email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
			</div>
		</div>
	</header>



	<div class="container menu">
	<?php
	$this->widget ( 'booster.widgets.TbNavbar', array (
			'brand' => '<img
					src="' . Yii::app ()->request->baseUrl . '/images/logo.png"
					alt="Главная">',
			'brandOptions' => array (
					'style' => 'height:100px;',
					'class' => 'visible-xs' 
			),
			'fixed' => false,
			'fluid' => true,
			'items' => array (
					array (
							'class' => 'booster.widgets.TbMenu',
							'type' => 'navbar',
							'items' => array (
									array (
											'label' => Yii::t ( 'app', 'Главная' ),
											'url' => '/' 
									),
									// 'url' => array (
									// '/site/index'
									// )
									array (
											'label' => 'About',
											'url' => array (
													'/site/page',
													'view' => 'about' 
											) 
									),
									array (
											'label' => 'Contact',
											'url' => array (
													'/site/contact' 
											) 
									),
									array (
											'label' => 'Login',
											'url' => array (
													'/site/login' 
											),
											'visible' => Yii::app ()->user->isGuest 
									),
									array (
											'label' => 'Logout (' . Yii::app ()->user->name . ')',
											'url' => array (
													'/site/logout' 
											),
											'visible' => ! Yii::app ()->user->isGuest 
									) 
							) 
					) 
			) 
	) );
	
	?>

<?php
$this->widget ( 'booster.widgets.TbBreadcrumbs', array (
		'homeLink' => 'Home',
		'links' => $this->breadcrumbs 
) );
?>
<?php echo yii::app()->user->role;?>
<div class="row">
	<div class="col-sm-12">
	</div>
			<div class="col-sm-12">
		<?php echo $content; ?>
	</div>
		</div>

	</div>

	<div class="container text-center">
		<footer id="footer">
			<a href="https://vk.com/artem_smorchkov" target="_blank"
				title="Артём Сморчков | Вконтакте">Разработал Артём Сморчков</a>
			<p>&copy; 2016 - <?php echo date('Y'); ?>, Все права защищены</p>

		</footer>
	</div>

</body>
</html>