<?php
/* @var $this LectoresController */
/* @var $model Lectores */

$this->breadcrumbs=array(
	'Lectores'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Lectores', 'url'=>array('index')),
	array('label'=>'Manejar Lectores', 'url'=>array('admin')),
);
?>

<h1>Crear Lectores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>