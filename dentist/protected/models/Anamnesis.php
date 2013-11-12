<?php

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
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Address[] $addresses
 * @property Country $idTblCountry
 * @property City $idTblCity
 * @property LevelSchooling $idTblLevelSchooling
 * @property Profession $idTblProfession
 * @property HealtRegimen $idTblHealtRegimen
 * @property HealtInstitution $idTblHealtInstitution
 * @property User $username0
 * @property Atm[] $atms
 * @property DentalExamination[] $dentalExaminations
 * @property Diagnosis[] $diagnosises
 * @property PeriodontalExamination[] $periodontalExaminations
 * @property PersonalBackground[] $personalBackgrounds
 * @property Phone[] $phones
 * @property PhysicalExamination[] $physicalExaminations
 * @property Prognosis[] $prognosises
 */
class Anamnesis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_anamnesis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username', 'required'),
			array('genre, blood_group, id_tbl_country, id_tbl_city, id_tbl_level_schooling, id_tbl_profession, id_tbl_healt_regimen, id_tbl_healt_institution', 'numerical', 'integerOnly'=>true),
			array('username, occupation, contact, create_user_id, update_user_id', 'length', 'max'=>64),
			array('name, surname, place_of_birth', 'length', 'max'=>128),
			array('date_birth, description_healt, family_history, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_anamnesis, username, name, surname, date_birth, place_of_birth, genre, blood_group, id_tbl_country, id_tbl_city, id_tbl_level_schooling, id_tbl_profession, occupation, contact, id_tbl_healt_regimen, id_tbl_healt_institution, description_healt, family_history, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'addresses' => array(self::HAS_MANY, 'Address', 'id_tbl_anamnesis'),
			'idTblCountry' => array(self::BELONGS_TO, 'Country', 'id_tbl_country'),
			'idTblCity' => array(self::BELONGS_TO, 'City', 'id_tbl_city'),
			'idTblLevelSchooling' => array(self::BELONGS_TO, 'LevelSchooling', 'id_tbl_level_schooling'),
			'idTblProfession' => array(self::BELONGS_TO, 'Profession', 'id_tbl_profession'),
			'idTblHealtRegimen' => array(self::BELONGS_TO, 'HealtRegimen', 'id_tbl_healt_regimen'),
			'idTblHealtInstitution' => array(self::BELONGS_TO, 'HealtInstitution', 'id_tbl_healt_institution'),
			'username0' => array(self::BELONGS_TO, 'User', 'username'),
			'atms' => array(self::HAS_MANY, 'Atm', 'id_tbl_anamnesis'),
			'dentalExaminations' => array(self::HAS_MANY, 'DentalExamination', 'id_tbl_anamnesis'),
			'diagnosises' => array(self::HAS_MANY, 'Diagnosis', 'id_tbl_anamnesis'),
			'periodontalExaminations' => array(self::HAS_MANY, 'PeriodontalExamination', 'id_tbl_anamnesis'),
			'personalBackgrounds' => array(self::HAS_MANY, 'PersonalBackground', 'id_tbl_anamnesis'),
			'phones' => array(self::HAS_MANY, 'Phone', 'id_tbl_anamnesis'),
			'physicalExaminations' => array(self::HAS_MANY, 'PhysicalExamination', 'id_tbl_anamnesis'),
			'prognosises' => array(self::HAS_MANY, 'Prognosis', 'id_tbl_anamnesis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
			'username' => 'Username',
			'name' => 'Name',
			'surname' => 'Surname',
			'date_birth' => 'Date Birth',
			'place_of_birth' => 'Place Of Birth',
			'genre' => 'Genre',
			'blood_group' => 'Blood Group',
			'id_tbl_country' => 'Id Tbl Country',
			'id_tbl_city' => 'Id Tbl City',
			'id_tbl_level_schooling' => 'Id Tbl Level Schooling',
			'id_tbl_profession' => 'Id Tbl Profession',
			'occupation' => 'Occupation',
			'contact' => 'Contact',
			'id_tbl_healt_regimen' => 'Id Tbl Healt Regimen',
			'id_tbl_healt_institution' => 'Id Tbl Healt Institution',
			'description_healt' => 'Description Healt',
			'family_history' => 'Family History',
			'create_user_id' => 'Create User',
			'create_time' => 'Create Time',
			'update_user_id' => 'Update User',
			'update_time' => 'Update Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('date_birth',$this->date_birth,true);
		$criteria->compare('place_of_birth',$this->place_of_birth,true);
		$criteria->compare('genre',$this->genre);
		$criteria->compare('blood_group',$this->blood_group);
		$criteria->compare('id_tbl_country',$this->id_tbl_country);
		$criteria->compare('id_tbl_city',$this->id_tbl_city);
		$criteria->compare('id_tbl_level_schooling',$this->id_tbl_level_schooling);
		$criteria->compare('id_tbl_profession',$this->id_tbl_profession);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('id_tbl_healt_regimen',$this->id_tbl_healt_regimen);
		$criteria->compare('id_tbl_healt_institution',$this->id_tbl_healt_institution);
		$criteria->compare('description_healt',$this->description_healt,true);
		$criteria->compare('family_history',$this->family_history,true);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Anamnesis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
