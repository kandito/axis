<?php
/* @var $this StandardController */
/* @var $data Standard */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_standard')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_standard), array('view', 'id'=>$data->id_standard)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purpose')); ?>:</b>
	<?php echo CHtml::encode($data->purpose); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scope')); ?>:</b>
	<?php echo CHtml::encode($data->scope); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('audience')); ?>:</b>
	<?php echo CHtml::encode($data->audience); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_assesment')); ?>:</b>
	<?php echo CHtml::encode($data->id_assesment); ?>
	<br />


</div>