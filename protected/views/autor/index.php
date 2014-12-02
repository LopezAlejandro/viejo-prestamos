<?php
/* @var $this AutorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Autors',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Autor'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Autor'), 'url'=>array('admin')),
);
?>

<h1>Autores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
