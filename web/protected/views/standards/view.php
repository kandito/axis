<?php
/* @var $this StandardsController */
/* @var $model Standards */

$this->breadcrumbs=array(
	'Standards'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Standards', 'url'=>array('index')),
	array('label'=>'Create Standards', 'url'=>array('create')),
	array('label'=>'Update Standards', 'url'=>array('update', 'id'=>$model->id_standard)),
	array('label'=>'Delete Standards', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_standard),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Standards', 'url'=>array('admin')),
);
?>

<div class="col-lg-12 col-header">     
  <h1 class="page-header">Detail <?php echo $model->name; ?></h1>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="col-sm-3 control-label">Nama : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->name; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Purpose : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->purpose; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Scope : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->scope; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Audience : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->audience; ?></label>  
      </div>
    </div>  
    <div class="form-group">
      <label class="col-sm-3 control-label">Description : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->description; ?></label>  
      </div>
    </div>  
    
  </form>     
</div><!--/.header-home-->

<div class="col-lg-12 col-header">
    <h3>Daftar Langkah Assesment</h3>
    <?php echo CHtml::link('Tambahkan Step', Yii::app()->createUrl("steps/create",array("id"=>$model->id_standard)), array('class' => 'btn btn-primary')); ?>
    <br>
    <br>
  <table class="table table-hover table-striped">
    <thead>
      <td>No</td>
      <td>Nama</td>
      <td>ID</td>
      <td>Deskripsi</td>
      <td>Action</td>
    </thead>

    <?php
    	$i = 1; 
    	foreach ($model->steps as $step) { 
    ?>
    	<tr>
          <td><?php echo $i++ ?></td>
          <td><?php echo $step->name ?></td>
          <td><?php echo $step->id_step ?></td>
          <td><?php echo $step->description ?></td>
          <td>
            <?php 
              echo CHtml::link('View', array('steps/view', 'id'=>$step->id_step), array('class' => 'btn btn-primary')); 
              echo CHtml::link("Delete", '#', array(
              'submit'=>array(
                'steps/delete', 
                'id' => $step->id_step),
              'params'=> array('returnUrl'=> Yii::app()->createUrl('standards/view',array('id' => $model->id_standard))),
              'confirm' => 'Are you sure you want to delete?',
              'class' => 'btn btn-danger btn-listview'));
            ?>
            
          </td>
        </tr>
   	<?php } ?>
  </table>
</div>