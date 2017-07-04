<?php
/* @var $this PageController */
//$this->breadcrumbs = array (
//		'Page' 
//);
?>
<?php $this->pageTitle = $model->title;?>
<h1><?php echo $this->pageTitle; //echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	<?php echo $model->body;
	print_r(Page::getUrl());
	
	?>
</p>
