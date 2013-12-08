<?php
/* @var $this TreatmentDecisionDentalPiecesController */
/* @var $model TreatmentDecisionDentalPieces */

$this->breadcrumbs=array(
	'Treatment Decision Dental Pieces'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TreatmentDecisionDentalPieces', 'url'=>array('index')),
	array('label'=>'Create TreatmentDecisionDentalPieces', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#treatment-decision-dental-pieces-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Treatment Decision Dental Pieces</h1>

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
	'id'=>'treatment-decision-dental-pieces-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tbl_treatment_decision_dental_piece',
		'id_tbl_dental_piece',
		'name_treatment_decision_dental_piece',
		'type_treatment_decision_dental_piece',
		'observation_treatment_decision_dental_piece',
		'create_user_id',
		/*
		'create_time',
		'update_time',
		'update_user_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
