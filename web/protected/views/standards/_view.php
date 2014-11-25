<?php
/* @var $this StandardsController */
/* @var $data Standards */
?>


<tr>
	<td>
		<?php echo $index + 1; ?> 
	</td>

	<td>
	<?php echo CHtml::encode($data->name); ?>
	</td>

	<td>
	<?php echo CHtml::link(CHtml::encode($data->id_standard), array('view', 'id'=>$data->id_standard)); ?>
	</td>


	<td>
        <?php 
        	echo CHtml::link("View", array('view', 'id'=>$data->id_standard), array('class' => 'btn btn-primary btn-listview')); 
        	echo CHtml::link("Edit", array('update', 'id'=>$data->id_standard), array('class' => 'btn btn-success btn-listview'));
        	echo CHtml::link("Delete", '#', array(
				'submit'=>array(
					'delete', 
					'id' => $data->id_standard),
				'params'=> array('returnUrl'=> Yii::app()->createUrl('standards/index')),
				'confirm' => 'Are you sure you want to delete?',
        		'class' => 'btn btn-danger btn-listview'));
        ?>
	</td>

</tr>