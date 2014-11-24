<?php
/* @var $this UserAssesmentsController */
/* @var $model UserAssesments */

$this->breadcrumbs=array(
	'User Assesments'=>array('index'),
	$model->id_user_assesment,
);

$this->menu=array(
	array('label'=>'List UserAssesments', 'url'=>array('index')),
	array('label'=>'Create UserAssesments', 'url'=>array('create')),
	array('label'=>'Update UserAssesments', 'url'=>array('update', 'id'=>$model->id_user_assesment)),
	array('label'=>'Delete UserAssesments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user_assesment),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserAssesments', 'url'=>array('admin')),
);
?>
<div class="header-home">
    <div class="container">
    <div class="row"> 
    <div class="col-xs-8">     
        <h1>Detail: <?php echo $model->idAssesment->name ?> </h1>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-sm-3 control-label">Sistem : </label>
            <div class="col-sm-8">
              <label class="control-label"><?php echo $model->idAssesment->idSystem->name; ?></label>  
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Assesment : </label>
            <div class="col-sm-8">
              <label class="control-label"><?php echo $model->idAssesment->name; ?></label>  
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Auditor : </label>
            <div class="col-sm-8">
              <label class="control-label"><?php echo $model->idUser->name; ?></label>  
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>      
</div><!--/.header-home-->

<div class="container">
  <div class="row content-container">
    <h3>Daftar Hasil</h3>
    <?php echo CHtml::link('Tambahkan Result', Yii::app()->createUrl("stepresults/create", array('id'=>$model->id_user_assesment)), array('class' => 'btn btn-primary')); ?>
    <br>
    <br>
  <table class="table table-hover table-striped">
    <thead>
      <td>No</td>
      <td>Nilai</td>
      <td>Komentar</td>
      <td>Catatan</td>
      <td>Action</td>
    </thead>

    <?php
    	$i = 1; 
    	foreach ($model->stepResults as $step_result) { 
    ?>
    	<tr>
          <td><?php echo $i++ ?></td>
          <td><?php echo $step_result->value ?></td>
          <td><?php echo $step_result->comment ?></td>
          <td><?php echo $step_result->notes ?></td>
          <td>
            <button type="button" class="btn btn-success">Download</button>
            <?php 
              echo CHtml::link('View', array('stepresults/view', 'id'=>$step_result->id_step_result), array('class' => 'btn btn-primary')); 
              echo CHtml::link("Delete", '#', array(
              'submit'=>array(
                'stepresults/delete', 
                'id' => $step_result->id_step_result),
              'params'=> array('returnUrl'=> Yii::app()->createUrl('userassesments/view',array('id' => $model->id_user_assesment))),
              'confirm' => 'Are you sure you want to delete?',
              'class' => 'btn btn-danger btn-listview'));
            ?>
          </td>
        </tr>
   	<?php } ?>
  </table>
  </div>
</div>