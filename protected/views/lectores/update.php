<?php
/* @var $this LectoresController */
/* @var $model Lectores */

$this->breadcrumbs=array(
	'Lectores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lectores', 'url'=>array('index')),
	array('label'=>'Create Lectores', 'url'=>array('create')),
	array('label'=>'View Lectores', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Lectores', 'url'=>array('admin')),
);
?>

<h1>Update Lectores <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>