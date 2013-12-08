<?php
/* @var $this CariesRiskClassificationController */
/* @var $model CariesRiskClassification */

$this->breadcrumbs=array(
	'Caries Risk Classifications'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CariesRiskClassification', 'url'=>array('index')),
	array('label'=>'Create CariesRiskClassification', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#caries-risk-classification-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Caries Risk Classifications</h1>

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
	'id'=>'caries-risk-classification-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tbl_caries_risk_classification',
		'id_tbl_dental_examination',
		'name_caries_risk_classification',
		'observation_caries_risk_classification',
		'score_caries_risk_classification',
		'total_sector_caries_risk_classification',
		/*
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
