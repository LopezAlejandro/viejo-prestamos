<?php
$this->breadcrumbs=array(
	'Copias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Copias', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Copias', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Copias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Delete').' Copias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Copias', 'url'=>array('admin')),
);
?>

<h1>Ver Copias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nro_copia',
		array(
		'name'=>'libros_id',
		'value'=>$model->libros->titulo,
		'header'=>'Libro',
		),
		array(
		'name'=>'estado_id',
		'value'=>$model->estado->descripcion,
		'header'=>'Estado',
		),
		
	),
)); ?>


<br /><h2> This Prestamos belongs to this Copias: </h2>
<ul><?php foreach($model->prestamoses as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->extension, array('prestamos/view', 'id' => $foreignobj->id)));

				} ?></ul>
