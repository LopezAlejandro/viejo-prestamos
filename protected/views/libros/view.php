<?php
/* @var $this LibrosController */
/* @var $model Libros */

function displayAutores($autores) {
    $output = "";
	foreach($autores as $i=>$autores) $output.= ($i>0?', ':'').CHtml::encode($autores->nombre);
	    return $output;
	    }
	    
$this->breadcrumbs=array(
	'Libros'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List Libros'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Libros'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Update Libros'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Delete Libros'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Está seguro que quiere borrar el libro?')),
	array('label'=>Yii::t('app','Manage Libros'), 'url'=>array('admin')),
);
?>

<h1>Ver <?php echo $model->titulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'titulo',
		array(               // related services
		'label'=>$model->getAttributeLabel('autor'),
		'type'=>'raw',
		'value'=>displayAutores($model->autors),
		),
		'editorial',
		'ano',
		array(
		'name'=>'tipo_libro_id',
		'value'=>$model->tipoLibro->descripcion,
		'header'=>'Tipo Libro',
		),
		)
	)); 
?>
