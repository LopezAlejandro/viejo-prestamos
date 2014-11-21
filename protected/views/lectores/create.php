<?php
/* @var $this LectoresController */
/* @var $model Lectores */

$this->breadcrumbs=array(
	'Lectores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lectores', 'url'=>array('index')),
	array('label'=>'Manage Lectores', 'url'=>array('admin')),
);
?>

<h1>Create Lectores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>