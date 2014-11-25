<?php
/* @var $this SystemController */
/* @var $model System */

$this->breadcrumbs=array(
	'Systems'=>array('index'),
	$model->name=>array('view','id'=>$model->id_system),
	'Update',
);

$this->menu=array(
	array('label'=>'List System', 'url'=>array('index')),
	array('label'=>'Create System', 'url'=>array('create')),
	array('label'=>'View System', 'url'=>array('view', 'id'=>$model->id_system)),
	array('label'=>'Manage System', 'url'=>array('admin')),
);
?>
<div class="header-home">
<div class="container">
<div class="row"> 
<div class="col-xs-8">     
    <h1>Ubah Sistem #<?php echo $model->id_system; ?></h1>
</div>
</div>
</div>      
</div><!--/.container-->


<?php $this->renderPartial('_form', array('model'=>$model)); ?>
