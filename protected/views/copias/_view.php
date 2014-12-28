<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_copia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nro_copia), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('libros_id')); ?>:</b>
	<?php echo CHtml::encode($data->libros->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_id')); ?>:</b>
	<?php echo CHtml::encode($data->estado->descripcion); ?>
	<br />


</div>
