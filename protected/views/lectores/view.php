<?php
/* @var $this LectoresController */
/* @var $model Lectores */

$this->breadcrumbs=array(
	'Lectores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Lectores', 'url'=>array('index')),
	array('label'=>'Crear Lectores', 'url'=>array('create')),
	array('label'=>'Modificar Lectores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Lectores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manejar Lectores', 'url'=>array('admin')),
);
?>

<h1>View Lectores #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'documento',
		array(
		'name'=>'clase_lector_id',
		'value'=>$model->claseLector->descripcion,
		'header'=>'Tipo Lector',
		),
		array(
		'name'=>'clase_documento_id',
		'value'=>$model->claseDocumento->descripcion_documento,
		'header'=>'Tipo Documento',
		),
		
	),
)); ?>
