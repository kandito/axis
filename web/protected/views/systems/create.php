<?php
/* @var $this SystemController */
/* @var $model System */

$this->breadcrumbs=array(
	'Systems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List System', 'url'=>array('index')),
	array('label'=>'Manage System', 'url'=>array('admin')),
);
?>

<div class="col-lg-12 col-header">   
    <h1 class="page-header">Tambahkan Sistem</h1>
</div>

<div class="col-lg-12">  
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>