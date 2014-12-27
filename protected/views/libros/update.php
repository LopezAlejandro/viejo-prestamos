<?php
/* @var $this LibrosController */
/* @var $model Libros */

$this->breadcrumbs=array(
	'Libros'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>Yii::t('app','List Libros'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Libros'), 'url'=>array('create')),
	array('label'=>Yii::t('app','View Libros'), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Manage Libros'), 'url'=>array('admin')),
);
?>

<h1>Actualizar <?php echo $model->titulo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
