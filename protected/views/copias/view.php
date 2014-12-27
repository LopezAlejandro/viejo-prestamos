<?php
$this->breadcrumbs=array(
	'Copiases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Copias', 'url'=>array('index')),
	array('label'=>'Create Copias', 'url'=>array('create')),
	array('label'=>'Update Copias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Copias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Copias', 'url'=>array('admin')),
);
?>

<h1>View Copias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'estado.descripcion',
		'libros.titulo',
		'nro_copia',
	),
)); ?>


<br /><h2> This Prestamos belongs to this Copias: </h2>
<ul><?php foreach($model->prestamoses as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->extension, array('prestamos/view', 'id' => $foreignobj->id)));

				} ?></ul>