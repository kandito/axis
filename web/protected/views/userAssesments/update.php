<?php
/* @var $this UserAssesmentsController */
/* @var $model UserAssesments */

$this->breadcrumbs=array(
	'User Assesments'=>array('index'),
	$model->id_user_assesment=>array('view','id'=>$model->id_user_assesment),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserAssesments', 'url'=>array('index')),
	array('label'=>'Create UserAssesments', 'url'=>array('create')),
	array('label'=>'View UserAssesments', 'url'=>array('view', 'id'=>$model->id_user_assesment)),
	array('label'=>'Manage UserAssesments', 'url'=>array('admin')),
);
?>

<h1>Update UserAssesments <?php echo $model->id_user_assesment; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>