<?php
/* @var $this ProfessionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profesiones',
);

$this->menu=array(
	array('label'=>'Crear Profesión', 'url'=>array('create')),);
?>

<h1>Profesiones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
