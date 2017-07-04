<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<?php 
$model = Page::model()->findAll();
print_r($model);
?>