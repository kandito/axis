<?php
/* @var $this StandardsController */
/* @var $model Standards */

$this->breadcrumbs=array(
	'Standards'=>array('index'),
	$model->name=>array('view','id'=>$model->id_standard),
	'Update',
);

$this->menu=array(
	array('label'=>'List Standards', 'url'=>array('index')),
	array('label'=>'Create Standards', 'url'=>array('create')),
	array('label'=>'View Standards', 'url'=>array('view', 'id'=>$model->id_standard)),
	array('label'=>'Manage Standards', 'url'=>array('admin')),
);
?>


<div class="header-home">
<div class="container">
<div class="row"> 
<div class="col-xs-8">     
    <h1><h1>Update Standards #<?php echo $model->id_standard; ?></h1></h1>
</div>
</div>
</div>      
</div><!--/.container-->


<?php $this->renderPartial('_form', array('model'=>$model)); ?>