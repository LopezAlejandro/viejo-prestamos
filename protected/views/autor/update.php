<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List Autor'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Autor'), 'url'=>array('create')),
	array('label'=>Yii::t('app','View Autor'), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Manage Autor'), 'url'=>array('admin')),
);
?>

<h1>Actualizar <?php echo $model->nombre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
