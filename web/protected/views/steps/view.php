<?php
/* @var $this StepsController */
/* @var $model Steps */

$this->breadcrumbs=array(
	'Steps'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Steps', 'url'=>array('index')),
	array('label'=>'Create Steps', 'url'=>array('create')),
	array('label'=>'Update Steps', 'url'=>array('update', 'id'=>$model->id_step)),
	array('label'=>'Delete Steps', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_step),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Steps', 'url'=>array('admin')),
);
?>

<div class="col-lg-12 col-header">     
  <h1 class="page-header">Detail <?php echo $model->name; ?></h1>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="col-sm-3 control-label">Standard : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->idStandard->name; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Nama : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->name; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Description : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->description; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Order : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->order; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Notes : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->notes; ?></label>  
      </div>
    </div>  
    <div class="form-group">
      <label class="col-sm-3 control-label">Guidlines : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->guidelines; ?></label>  
      </div>
    </div>  
    <div class="form-group">
      <label class="col-sm-3 control-label">Tools : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->tools; ?></label>  
      </div>
    </div>
    
  </form>
</div>
