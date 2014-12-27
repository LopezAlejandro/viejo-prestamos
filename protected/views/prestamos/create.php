<?php
/* @var $this PrestamosController */
/* @var $model Prestamos */

$this->breadcrumbs=array(
	'Prestamoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Prestamos', 'url'=>array('index')),
	array('label'=>'Manage Prestamos', 'url'=>array('admin')),
);
?>

<h1>Create Prestamos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>