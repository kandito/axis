<?php
/* @var $this StepResultsController */
/* @var $model StepResults */

$this->breadcrumbs=array(
	'Step Results'=>array('index'),
	$model->id_step_result,
);

$this->menu=array(
	array('label'=>'List StepResults', 'url'=>array('index')),
	array('label'=>'Create StepResults', 'url'=>array('create')),
	array('label'=>'Update StepResults', 'url'=>array('update', 'id'=>$model->id_step_result)),
	array('label'=>'Delete StepResults', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_step_result),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StepResults', 'url'=>array('admin')),
);
?>

<div class="col-lg-12 col-header">      
  <h1 class="page-header">Detail: <?php echo $model->idStep->name ?> <i>oleh</i> <?php echo $model->idUserAssesment->idUser->name ?> </h1>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="col-sm-3 control-label">Sistem : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->idUserAssesment->idAssesment->idSystem->name; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Assesment : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->idUserAssesment->idAssesment->name; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Auditor : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->idUserAssesment->idUser->name; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Tanggal : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->date; ?> <?php echo $model->time; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Nilai : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->value; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Catatan : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->notes; ?></label>  
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Komentar : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->comment; ?></label>  
      </div>
    </div>
  </form>
</div>
     

<?php        
echo CHtml::link("Delete", '#', array(
'submit'=>array(
  'stepresults/delete', 
  'id' => $model->id_step_result),
'params'=> array('returnUrl'=> Yii::app()->createUrl('userassesments/view',array('id' => $model->idUserAssesment->id_user_assesment))),
'confirm' => 'Are you sure you want to delete?',
'class' => 'btn btn-danger btn-listview'));
?>
<?php echo CHtml::link('Kembali', array('userassesments/view','id' => $model->idUserAssesment->id_user_assesment), array('class' => 'btn btn-success')); ?>