<?php
/* @var $this ClaseDocumentoController */
/* @var $model ClaseDocumento */

$this->breadcrumbs=array(
	'Clase Documentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClaseDocumento', 'url'=>array('index')),
	array('label'=>'Manage ClaseDocumento', 'url'=>array('admin')),
);
?>

<h1>Create ClaseDocumento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>