<?php
/* @var $this Rh1ValuesController */
/* @var $model Rh1Values */

$this->breadcrumbs=array(
	'Rh1 Values'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Rh1Values', 'url'=>array('index')),
	array('label'=>'Create Rh1Values', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rh1-values-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Rh1 Values</h1>

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
	'id'=>'rh1-values-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tbl_rh1_values',
		'id_tbl_rh1',
		'month',
		'landfill_ordinary',
		'landfill_idrs',
		'recycling_recyclable',
		/*
		'recycling_idr',
		'total_waste_not_hazardous',
		'hef_biosanitary',
		'hef_sharps',
		'hef_idd',
		'incineration_sharps',
		'incineration_pathological',
		'incineration_chemical',
		'incineration_other_residues',
		'incineration_idi',
		'ots_other_residues',
		'ots_chemical_reactives',
		'ots_idos',
		'total_waste_hazardous',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
