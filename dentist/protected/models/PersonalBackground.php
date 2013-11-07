<?php

/**
 * This is the model class for table "tbl_personal_background".
 *
 * The followings are the available columns in table 'tbl_personal_background':
 * @property integer $id_tbl_personal_background
 * @property string $username
 * @property integer $id_tbl_anamnesis
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property OptionsDentalHistory[] $optionsDentalHistories
 * @property OptionsDentalHistory[] $optionsDentalHistories1
 * @property OptionsDentalHistory[] $optionsDentalHistories2
 * @property OptionsObstetricGynecology[] $optionsObstetricGynecologies
 * @property OptionsObstetricGynecology[] $optionsObstetricGynecologies1
 * @property OptionsObstetricGynecology[] $optionsObstetricGynecologies2
 * @property OptionsOralHabits[] $optionsOralHabits
 * @property OptionsOralHabits[] $optionsOralHabits1
 * @property OptionsOralHabits[] $optionsOralHabits2
 * @property OptionsPathologicalHistory[] $optionsPathologicalHistories
 * @property OptionsPathologicalHistory[] $optionsPathologicalHistories1
 * @property OptionsPathologicalHistory[] $optionsPathologicalHistories2
 * @property OptionsPersonalBackground[] $optionsPersonalBackgrounds
 * @property OptionsPersonalBackground[] $optionsPersonalBackgrounds1
 * @property OptionsPersonalBackground[] $optionsPersonalBackgrounds2
 * @property OptionsSocialHabits[] $optionsSocialHabits
 * @property OptionsSocialHabits[] $optionsSocialHabits1
 * @property OptionsSocialHabits[] $optionsSocialHabits2
 * @property Anamnesis $idTblAnamnesis
 * @property Anamnesis $username0
 */
class PersonalBackground extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_personal_background';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, id_tbl_anamnesis', 'required'),
			array('id_tbl_anamnesis', 'numerical', 'integerOnly'=>true),
			array('username, create_user_id, update_user_id', 'length', 'max'=>64),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_personal_background, username, id_tbl_anamnesis, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'optionsDentalHistories' => array(self::HAS_MANY, 'OptionsDentalHistory', 'id_tbl_personal_background'),
			'optionsDentalHistories1' => array(self::HAS_MANY, 'OptionsDentalHistory', 'username'),
			'optionsDentalHistories2' => array(self::HAS_MANY, 'OptionsDentalHistory', 'id_tbl_anamnesis'),
			'optionsObstetricGynecologies' => array(self::HAS_MANY, 'OptionsObstetricGynecology', 'id_tbl_personal_background'),
			'optionsObstetricGynecologies1' => array(self::HAS_MANY, 'OptionsObstetricGynecology', 'username'),
			'optionsObstetricGynecologies2' => array(self::HAS_MANY, 'OptionsObstetricGynecology', 'id_tbl_anamnesis'),
			'optionsOralHabits' => array(self::HAS_MANY, 'OptionsOralHabits', 'id_tbl_personal_background'),
			'optionsOralHabits1' => array(self::HAS_MANY, 'OptionsOralHabits', 'username'),
			'optionsOralHabits2' => array(self::HAS_MANY, 'OptionsOralHabits', 'id_tbl_anamnesis'),
			'optionsPathologicalHistories' => array(self::HAS_MANY, 'OptionsPathologicalHistory', 'id_tbl_personal_background'),
			'optionsPathologicalHistories1' => array(self::HAS_MANY, 'OptionsPathologicalHistory', 'username'),
			'optionsPathologicalHistories2' => array(self::HAS_MANY, 'OptionsPathologicalHistory', 'id_tbl_anamnesis'),
			'optionsPersonalBackgrounds' => array(self::HAS_MANY, 'OptionsPersonalBackground', 'id_tbl_personal_background'),
			'optionsPersonalBackgrounds1' => array(self::HAS_MANY, 'OptionsPersonalBackground', 'username'),
			'optionsPersonalBackgrounds2' => array(self::HAS_MANY, 'OptionsPersonalBackground', 'id_tbl_anamnesis'),
			'optionsSocialHabits' => array(self::HAS_MANY, 'OptionsSocialHabits', 'id_tbl_personal_background'),
			'optionsSocialHabits1' => array(self::HAS_MANY, 'OptionsSocialHabits', 'username'),
			'optionsSocialHabits2' => array(self::HAS_MANY, 'OptionsSocialHabits', 'id_tbl_anamnesis'),
			'idTblAnamnesis' => array(self::BELONGS_TO, 'Anamnesis', 'id_tbl_anamnesis'),
			'username0' => array(self::BELONGS_TO, 'Anamnesis', 'username'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_personal_background' => 'Id Tbl Personal Background',
			'username' => 'Username',
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
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

		$criteria->compare('id_tbl_personal_background',$this->id_tbl_personal_background);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
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
	 * @return PersonalBackground the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
