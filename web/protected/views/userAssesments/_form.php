<?php
/* @var $this UserAssesmentsController */
/* @var $model UserAssesments */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-assesments-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array("class"=>"form-horizontal col-sm-12", "role" => "form"),
)); ?>
	<br>
	<?php echo $form->textField($model,'id_assesment',array('hidden'=>'true', 'value'=>$model->idAssesment->id_assesment)); ?>	  
	
	<div class="form-group">
	    <label class="col-sm-2 control-label"><?php echo $form->labelEx($model,'id_user'); ?></label>
	    <div class="col-sm-4">
	    	<?php 
	    		$user_options = CHtml::listData(Users::model()->findAll(),'id_user','name');
	    		echo $form->dropDownList($model,'id_user', $user_options, array('class' => 'form-control')); 
	    	?>      
	    </div>
	    <?php echo $form->error($model,'id_user',array('class'=>'alert alert-danger col-sm-4',  'role' => 'alert')); ?>
  	</div>

	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-4">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->