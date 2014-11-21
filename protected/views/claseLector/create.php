<?php
/* @var $this ClaseLectorController */
/* @var $model ClaseLector */

$this->breadcrumbs=array(
	'Clase Lectors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClaseLector', 'url'=>array('index')),
	array('label'=>'Manage ClaseLector', 'url'=>array('admin')),
);
?>

<h1>Create ClaseLector</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>