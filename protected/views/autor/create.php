<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autors'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>Yii::t('app','List Autor'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage Autor'), 'url'=>array('admin')),
);
?>

<h1>Nuevo Autor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
