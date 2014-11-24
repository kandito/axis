<?php
/* @var $this StepsController */
/* @var $data Steps */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_step')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_step), array('view', 'id'=>$data->id_step)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guidelines')); ?>:</b>
	<?php echo CHtml::encode($data->guidelines); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tools')); ?>:</b>
	<?php echo CHtml::encode($data->tools); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_standard')); ?>:</b>
	<?php echo CHtml::encode($data->id_standard); ?>
	<br />

	*/ ?>

</div>