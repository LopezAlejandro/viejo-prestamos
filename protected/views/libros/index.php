<?php
/* @var $this LibrosController */
/* @var $dataProvider CActiveDataProvider */

function displayAutores($autores) {
    $output = "";
	foreach($autores as $i=>$autores) $output.= ($i>0?', ':'').CHtml::encode($autores->nombre);
	    return $output;
	    }

$this->breadcrumbs=array(
	'Libros',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Libros'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Libros'), 'url'=>array('admin')),
);
?>

<h1>Libros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
