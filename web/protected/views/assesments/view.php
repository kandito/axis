<?php
/* @var $this AssesmentsController */
/* @var $model Assesments */

$this->breadcrumbs=array(
	'Assesments'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Assesments', 'url'=>array('index')),
	array('label'=>'Create Assesments', 'url'=>array('create')),
	array('label'=>'Update Assesments', 'url'=>array('update', 'id'=>$model->id_assesment)),
	array('label'=>'Delete Assesments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_assesment),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Assesments', 'url'=>array('admin')),
);
?>
<div class="header-home">
    <div class="container">
    <div class="row"> 
    <div class="col-xs-8">     
        <h1>Detail <?php echo $model->name; ?></h1>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-sm-3 control-label">Nama : </label>
            <div class="col-sm-8">
              <label class="control-label"><?php echo $model->name; ?></label>  
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Deskripsi : </label>
            <div class="col-sm-8">
              <label class="control-label"><?php echo $model->description; ?></label>  
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Tanggal: </label>
            <div class="col-sm-8">
              <label class="control-label"><?php echo $model->date; ?> <?php echo $model->date; ?></label>  
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Tujuan : </label>
            <div class="col-sm-8">
              <label class="control-label"><?php echo $model->objectives; ?></label>  
            </div>
          </div>  
          <div class="form-group">
            <label class="col-sm-3 control-label">Kebutuhan : </label>
            <div class="col-sm-8">
              <label class="control-label"><?php echo $model->requirements; ?></label>  
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Lokasi : </label>
            <div class="col-sm-8">
              <label class="control-label"><?php echo $model->location; ?></label>  
            </div>
          </div>
          
        </form>
        </div>
      </div>
    </div>      
</div><!--/.header-home-->

<div class="container">
  <div class="row content-container">
    <h3>Daftar Assesment</h3>
    <?php echo CHtml::link('Tambahkan Auditor', Yii::app()->createUrl("userassesments/create", array('id'=>$model->id_assesment)), array('class' => 'btn btn-primary')); ?>
    <br>
    <br>
  <table class="table table-hover table-striped">
    <thead>
      <td>No</td>
      <td>Nama Auditor</td>
      <td>ID</td>
      <td>Action</td>
    </thead>

    <?php
    	$i = 1; 
    	foreach ($model->userAssesments as $user_assesment) { 
    ?>
    	<tr>
          <td><?php echo $i++ ?></td>
          <td><?php echo $user_assesment->idUser->name ?></td>
          <td><?php echo $user_assesment->id_user_assesment ?></td>
          <td>
            <button type="button" class="btn btn-success">Download</button>
            <?php 
              echo CHtml::link('View', array('userassesments/view', 'id'=>$user_assesment->id_user_assesment), array('class' => 'btn btn-primary')); 
              echo CHtml::link("Delete", '#', array(
              'submit'=>array(
                'userassesments/delete', 
                'id' => $user_assesment->id_user_assesment),
              'params'=> array('returnUrl'=> Yii::app()->createUrl('assesments/view',array('id' => $model->id_assesment))),
              'confirm' => 'Are you sure you want to delete?',
              'class' => 'btn btn-danger btn-listview'));
            ?>
          </td>
        </tr>
   	<?php } ?>
  </table>
  </div>
</div>
