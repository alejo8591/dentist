<?php
class PatientDataController extends Controller{
/**
 * This is the model class for table "tbl_anamnesis".
 *
 * The followings are the available columns in table 'tbl_anamnesis':
 * @property integer $id_tbl_anamnesis
 * @property string $username
 * @property string $name
 * @property string $surname
 * @property string $date_birth
 * @property string $place_of_birth
 * @property integer $genre
 * @property integer $blood_group
 * @property integer $id_tbl_country
 * @property integer $id_tbl_city
 * @property integer $id_tbl_level_schooling
 * @property integer $id_tbl_profession
 * @property string $occupation
 * @property string $contact
 * @property integer $id_tbl_healt_regimen
 * @property integer $id_tbl_healt_institution
 * @property string $description_healt
 * @property string $family_history
 */
	public function filters()
	{
      return array(
         'ajaxOnly + field'
         ); 
  	}

  	public function actionCreate()
   	{
	      $anamnesis = new Anamnesis;
	      $address = new Address;
	      $phone = new Phone;
	      $validAddress = true;
	      $validPhone = true;
	      $validAnamnesis = true;

	      if (isset($_POST['Anamnesis'], $_POST['Address'], $_POST['Phone'])) 
	      {
	      	$anamnesis->attributes = $_POST['Anamnesis'];
	      	$address->attributes = $_POST['Address'];
	      	$phone->attributes = $_POST['Phone'];

	      	foreach ($address as $key => $value) {
	      		$value->attributes = $_POST['Address'][$key];
	      		$validAddress = $value->validate() && $validAddress;
	      	}

	      	foreach ($phone as $key => $value) {
	      		$value->attributes = $_POST['Phone'][$key];
	      		$validPhone = $value->validate() && $validPhone; 
	      	}

	      	$validAnamnesis = $anamnesis->validate() && $validAnamnesis;

	      	if($validAnamnesis && $validPhone && $validAddress){
	      		$anamnesis->save(false);
	      		$address->save(false);
	      		$phone->save(false);
	      	}
	      }

	      $this->render('create', array(
	      	'anamnesis'=> $anamnesis,
	      	'address' => $address,
	      	'phone' => $phone,
	      ));
	}
}
?>