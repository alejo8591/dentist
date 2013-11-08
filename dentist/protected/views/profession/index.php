<?php
/* @var $this ProfessionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Professions',
);

$this->menu=array(
	array('label'=>'Crear Profesión', 'url'=>array('create')),
	array('label'=>'Manage Profession', 'url'=>array('admin')),
);
?>

<h1>Profesiones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
