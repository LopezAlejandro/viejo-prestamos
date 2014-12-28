<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extension')); ?>:</b>
	<?php echo CHtml::encode($data->extension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_devolucion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_devolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lectores_idl')); ?>:</b>
	<?php echo CHtml::encode($data->lectores_idl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('copias_id')); ?>:</b>
	<?php echo CHtml::encode($data->copias_id); ?>
	<br />


</div>
