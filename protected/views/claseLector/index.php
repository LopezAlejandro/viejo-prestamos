<?php
/* @var $this ClaseLectorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clase Lectors',
);

$this->menu=array(
	array('label'=>'Create ClaseLector', 'url'=>array('create')),
	array('label'=>'Manage ClaseLector', 'url'=>array('admin')),
);
?>

<h1>Clase Lectors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
