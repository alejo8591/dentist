<?php
/* @var $this DuringConsultationController */
/* @var $model DuringConsultation */

$this->breadcrumbs=array(
	'During Consultations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DuringConsultation', 'url'=>array('index')),
	array('label'=>'Create DuringConsultation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#during-consultation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage During Consultations</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'during-consultation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tbl_during_consultation',
		'name_during_consultation',
		'description',
		'create_user_id',
		'create_time',
		'update_user_id',
		/*
		'update_time',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
