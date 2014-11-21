<?php
/* @var $this ClaseDocumentoController */
/* @var $model ClaseDocumento */

$this->breadcrumbs=array(
	'Clase Documentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClaseDocumento', 'url'=>array('index')),
	array('label'=>'Create ClaseDocumento', 'url'=>array('create')),
	array('label'=>'View ClaseDocumento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ClaseDocumento', 'url'=>array('admin')),
);
?>

<h1>Update ClaseDocumento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>