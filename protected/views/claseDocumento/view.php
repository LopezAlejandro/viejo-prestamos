<?php
/* @var $this ClaseDocumentoController */
/* @var $model ClaseDocumento */

$this->breadcrumbs=array(
	'Clase Documentos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ClaseDocumento', 'url'=>array('index')),
	array('label'=>'Create ClaseDocumento', 'url'=>array('create')),
	array('label'=>'Update ClaseDocumento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ClaseDocumento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClaseDocumento', 'url'=>array('admin')),
);
?>

<h1>View ClaseDocumento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion_documento',
	),
)); ?>
