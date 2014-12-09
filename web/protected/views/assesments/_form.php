<?php
/* @var $this AssesmentsController */
/* @var $model Assesments */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'assesments-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array("class"=>"form-horizontal col-sm-12", "role" => "form"),
)); ?>
	<br>
	<?php echo $form->textField($model,'id_system',array('hidden'=>'true','value'=>$model->idSystem->id_system)); ?>	      


	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'name'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'name',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'id_standard'); ?></label>
	    <div class="col-sm-4">
	    	<?php 
	    		$standard = CHtml::listData(Standards::model()->findAll(),'id_standard','name');
	    		echo $form->dropDownList($model,'id_standard', $standard, array('class' => 'form-control')); 
	    	?> 
	    </div>
	    <?php echo $form->error($model,'id_standard',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'description'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'description',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'description',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'date'); ?></label>
	    <div class="col-sm-4">
				<div class='input-group date' id='datetimepicker1'>
	    	<?php echo $form->textField($model,'date',array('size'=>50,'maxlength'=>50, 'class' => 'form-control','data-date-format'=>"YYYY-mm-DD")); ?>	      
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
	    </div>
	    <?php echo $form->error($model,'date',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>
	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'time'); ?></label>
	    <div class="col-sm-4">
	    	<div class='input-group date' id='datetimepicker4'>
            	<?php echo $form->textField($model,'time',array('size'=>50,'maxlength'=>50, 'class' => 'form-control',' data-date-format'=>"HH:mm")); ?>	      
	    	        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
	    </div>
	    <?php echo $form->error($model,'time',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>
<script>
$(document).ready(function(){
    $('#datetimepicker1').datetimepicker({					
    	pickTime: false
		});
    $('#datetimepicker4').datetimepicker({
        pickDate: false,pick12HourFormat: false

    });           
});
</script>
	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'location'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textField($model,'location',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'location',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'objectives'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'objectives',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'objectives',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

  	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'requirements'); ?></label>
	    <div class="col-sm-4">
	    	<?php echo $form->textArea($model,'requirements',array('class' => 'form-control')); ?>	      
	    </div>
	    <?php echo $form->error($model,'requirements',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-4">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Buat' : 'Simpan', array('class'=>'btn btn-default')); ?>
			<?php echo CHtml::link('Kembali', array('systems/view','id' => $model->idSystem->id_system), array('class' => 'btn btn-success')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->