<?php
/* @var $this UserAssesmentsController */
/* @var $data UserAssesments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user_assesment')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_user_assesment), array('view', 'id'=>$data->id_user_assesment)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_assesment')); ?>:</b>
	<?php echo CHtml::encode($data->id_assesment); ?>
	<br />


</div>