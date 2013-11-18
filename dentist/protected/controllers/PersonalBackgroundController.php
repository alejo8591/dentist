<?php

class PersonalBackgroundController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
			'ajaxOnly + loadOSH',
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'loadOSH', 'loadOOH', 'loadODH', 'loadOPH'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new PersonalBackground;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['PersonalBackground']))
		{
			$model->attributes = $_POST['PersonalBackground'];
			// optionsSocialHabits 
			if (isset($_POST['OptionsSocialHabits'])) 
			{
				$model->optionsSocialHabits = $_POST['OptionsSocialHabits'];
				$model->saveWithRelated('optionsSocialHabits');

			}
			// optionsOralHabits
			if (isset($_POST['OptionsOralHabits'])) {
				$model->optionsOralHabits = $_POST['OptionsOralHabits'];
				$model->saveWithRelated('optionsOralHabits');
			}
			// optionsDentalHistories
			if (isset($_POST['OptionsDentalHistory'])) {
				$model->optionsDentalHistories = $_POST['OptionsDentalHistory'];
				$model->saveWithRelated('optionsDentalHistories');
			}
			// OptionsPathologicalHistory - optionsPathologicalHistories
			if (isset($_POST['OptionsPathologicalHistory'])) {
				$model->optionsPathologicalHistories = $_POST['OptionsPathologicalHistory'];
				$model->saveWithRelated('optionsPathologicalHistories');
			}

			if ($model->save()) 
			{
				$this->redirect(array('view', 'id'=>$model->id_tbl_personal_background));
			}	
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PersonalBackground']))
		{
			$model->attributes=$_POST['PersonalBackground'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tbl_personal_background));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('PersonalBackground');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PersonalBackground('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PersonalBackground']))
			$model->attributes=$_GET['PersonalBackground'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PersonalBackground the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PersonalBackground::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PersonalBackground $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='personal-background-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/**
	 * @return Object with renderPartial for Options Social Habits for user
	 */
	public function actionLoadOSH($index)
	{
		$model = new OptionsSocialHabits;
		$this->renderPartial('_optionssocialhabits', array(
			'model' => $model,
			'index' => $index,
		), false, true);
	}

	/**
	 * @return Object with renderPartial for Option Oral Habits 
	 */
	public function actionLoadOOH($index)
	{
		$model = new OptionsOralHabits;
		$this->renderPartial('_optionsoralhabits', array(
			'model' => $model,
			'index' => $index,
		), false, true);
	}
	/**
	 * @return Object with renderPartial for Options Dental History
	 */
	public function actionLoadODH($index)
	{
		$model = new OptionsDentalHistory;
		$this->renderPartial('_optionsdentalhistory', array(
			'model' => $model,
			'index' => $index,
		), false, true);
	}

	/**
	 * @return Object with renderPartial for Options Dental History
	 */
	public function actionLoadOPH($index)
	{
		$model = new OptionsPathologicalHistory;
		$this->renderPartial('_optionspathologicalhistory', array(
			'model' => $model,
			'index' => $index,
		), false, true);
	}
}
