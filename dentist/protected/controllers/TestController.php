<?php
class TestController extends Controller
{
	public function actionCreate()
	{
		$address = new Address;
		$city = new City;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Address'], $_POST['City']))
		{
			$address->attributes=$_POST['Address'];
			$city->attributes=$_POST['City'];
			$valid = $address->validate();
			$valid = $city->validate() && $valid;

			if($valid)
			{
				if($address->save(false))
				{
					$city->save(false);
					$this->redirect(array('view','id'=>$address->id_tbl_address));
				}	
			}
		}

		$this->render('create',array(
			'address'=>$address,
			'city'=>$city,
		));
	}


	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Address');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'address'=>$this->loadModel($id),
		));
	}

	public function loadModel($id)
	{
		$model=Address::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $address;
	}

}
?>