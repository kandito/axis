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
<div class="col-lg-12 col-header">    
  <h1 class="page-header">Detail: <?php echo $model->idAssesment->name ?> </h1>
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
    <div class="form-group">
      <label class="col-sm-3 control-label">Deskripsi : </label>
      <div class="col-sm-8">
        <label class="control-label"><?php echo $model->idAssesment->description; ?></label>  
      </div>
    </div>
  </form>
</div>
      
<div class="col-lg-12">
    <h3>Daftar Hasil</h3>
    <br>
  <table id="assessment" class="table table-hover table-striped">
    <thead>
      <td>No</td>
      <td>Nama</td>
      <td style="width: 550px">Deskripsi</td>
      <td>Penilaian</td>
      <td>Action</td>
    </thead>

    <?php
    	$i = 1; 
    	foreach ($model->idAssesment->idStandard->steps as $step) { 
    ?>
    	<tr>
          <td><?php echo $i++ ?></td>
          <td>
          <?php 
              echo CHtml::link($step->name, array('steps/view', 'id'=>$step->id_step)); 
            ?>  
          </td>
          <td><?php echo $step->description ?></td>
          
          <?php
            $step_result = $step->get_step_result($model->id_user_assesment);

            if($step_result == null) {
            //jika nilai belum ada
          ?>
          <td>
            -
          </td>
          <td>
            <?php
            echo CHtml::link('Isi Nilai', array('stepresults/create', 'id'=>$model->id_user_assesment, 'step'=>$step->id_step), array('class' => 'btn btn-success'));
            ?>
          </td>
          <?php
            //jika nilai sudah ada
            } else {
          ?> 
          <td>
            <?php echo $step_result->value ?>
          </td>
          <td>
            <?php 
              echo CHtml::link('Lihat', array('stepresults/view', 'id'=>$step_result->id_step_result), array('class' => 'btn btn-primary btn-listview')); 
            ?>
          </td>
          <?php
            }
          ?>

        </tr>
   	<?php } ?>
  </table>  
</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/dataTables/dataTables.tableTools.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/dataTables.tableTools.css" rel="stylesheet">

<script>
$(document).ready( function () {
    //$('#assessment').DataTable();
    $('#assessment').DataTable( {
        "dom": 'T<"clear">lfrtip',
        "aoColumns": [
          { "bSortable": false },
          { "bSortable": false },
          { "bSortable": false },
          { "bSortable": false },
          { "bSortable": false }
        
        ] ,
      "tableTools": {
            "sSwfPath": "<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf",
             "aButtons": [
            {
                "sExtends": "pdf",
                "sTitle" : "<?php echo $model->idAssesment->idSystem->name." - ".$model->idAssesment->name." - ".$model->idUser->name; ?>",
                "mColumns": [0, 1, 2, 3]
            }
        ]
        }
    } );
} );
</script>