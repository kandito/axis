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
<div class="col-lg-12 col-header">  
    <h1 class="page-header">Ubah Sistem #<?php echo $model->id_system; ?></h1>
</div>

<div class="col-lg-12">  
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>