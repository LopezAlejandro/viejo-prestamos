<?php
/* @var $this LectoresController */
/* @var $model Lectores */

$this->breadcrumbs=array(
	'Lectores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Lectores', 'url'=>array('index')),
	array('label'=>'Create Lectores', 'url'=>array('create')),
	array('label'=>'Update Lectores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Lectores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lectores', 'url'=>array('admin')),
);
?>

<h1>View Lectores #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'documento',
		'clase_lector_id',
		'clase_documento_id',
	),
)); ?>
