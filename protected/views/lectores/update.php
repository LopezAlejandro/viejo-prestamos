<?php
/* @var $this LectoresController */
/* @var $model Lectores */

$this->breadcrumbs=array(
	'Lectores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Lectores', 'url'=>array('index')),
	array('label'=>'Crear Lectores', 'url'=>array('create')),
	array('label'=>'Ver Lectores', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manejar Lectores', 'url'=>array('admin')),
);
?>

<h1>Update Lectores <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>