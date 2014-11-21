<?php
/* @var $this ClaseLectorController */
/* @var $model ClaseLector */

$this->breadcrumbs=array(
	'Clase Lectors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ClaseLector', 'url'=>array('index')),
	array('label'=>'Create ClaseLector', 'url'=>array('create')),
	array('label'=>'Update ClaseLector', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ClaseLector', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClaseLector', 'url'=>array('admin')),
);
?>

<h1>View ClaseLector #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
		'dias_prestamo',
	),
)); ?>
