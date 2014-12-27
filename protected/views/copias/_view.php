<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_id')); ?>:</b>
	<?php echo CHtml::encode($data->estado_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('libros_id')); ?>:</b>
	<?php echo CHtml::encode($data->libros_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_copia')); ?>:</b>
	<?php echo CHtml::encode($data->nro_copia); ?>
	<br />


</div>
