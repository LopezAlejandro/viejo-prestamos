<?php
/* @var $this LibrosController */
/* @var $model Libros */

$this->breadcrumbs=array(
	'Libros'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>Yii::t('app','List Libros'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage Libros'), 'url'=>array('admin')),
);
?>

<h1>Create Libros</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
