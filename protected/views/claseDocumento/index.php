<?php
/* @var $this ClaseDocumentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clase Documentos',
);

$this->menu=array(
	array('label'=>'Create ClaseDocumento', 'url'=>array('create')),
	array('label'=>'Manage ClaseDocumento', 'url'=>array('admin')),
);
?>

<h1>Clase Documentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
