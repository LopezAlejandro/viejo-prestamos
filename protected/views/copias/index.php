<?php
$this->breadcrumbs = array(
	'Copiases',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create') . ' Copias', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Copias', 'url'=>array('admin')),
);
?>

<h1>Copiases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
