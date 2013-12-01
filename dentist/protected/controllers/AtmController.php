<?php

class AtmController extends Controller
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
				'actions'=>array('create','update', 'loadOA', 'loadOAMM', 'loadOASF'),
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
		$model=new Atm;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Atm']))
		{
			$model->attributes=$_POST['Atm'];

			// OptionsAtm - optionsAtms
			if (isset($_POST['OptionsAtm'])) 
			{
				$model->optionsAtms = $_POST['OptionsAtm'];
				$model->saveWithRelated('optionsAtms');
			}
			// OptionsAtmMandibularMovements - optionsAtms
			if (isset($_POST['OptionsAtmMandibularMovements'])) 
			{
				$model->optionsAtmMandibularMovements = $_POST['OptionsAtmMandibularMovements'];
				$model->saveWithRelated('optionsAtmMandibularMovements');
			}
			// optionsAtmSoftTissues - optionsAtmSoftTissues
			if (isset($_POST['OptionsAtmSoftTissue'])) 
			{
				$model->optionsAtmSoftTissues = $_POST['OptionsAtmSoftTissue'];
				$model->saveWithRelated('optionsAtmSoftTissues');
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tbl_atm));
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

		if(isset($_POST['Atm']))
		{
			$model->attributes=$_POST['Atm'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tbl_atm));
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
		$dataProvider=new CActiveDataProvider('Atm');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Atm('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Atm']))
			$model->attributes=$_GET['Atm'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Atm the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Atm::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Atm $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='atm-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/**
	 * @return Object with renderPartial for Options ATM
	 */
	public function actionLoadOA($index)
	{
		$model = new OptionsAtm;
		$this->renderPartial('_optionsatm', array(
			'model' => $model,
			'index' => $index,
		), false, true);
	}
	/**
	 * @return Object with renderPartial for Options ATM Mandibular Movements
	 */
	public function actionLoadOAMM($index)
	{
		$model = new OptionsAtmMandibularMovements;
		$this->renderPartial('_optionsatmmandibularmovements', array(
			'model' => $model,
			'index' => $index,
		), false, true);
	}
	/**
	 * @return Object with renderPartial for Options ATM Soft Tissue
	 */
	public function actionLoadOASF($index)
	{
		$model = new OptionsAtmSoftTissue;
		$this->renderPartial('_optionsatmsofttissue', array(
			'model' => $model,
			'index' => $index,
		), false, true);
	}
}
