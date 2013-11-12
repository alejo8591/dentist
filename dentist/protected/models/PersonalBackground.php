<?php

/**
 * This is the model class for table "tbl_personal_background".
 *
 * The followings are the available columns in table 'tbl_personal_background':
 * @property integer $id_tbl_personal_background
 * @property integer $id_tbl_anamnesis
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property OptionsDentalHistory[] $optionsDentalHistories
 * @property OptionsObstetricGynecology[] $optionsObstetricGynecologies
 * @property OptionsOralHabits[] $optionsOralHabits
 * @property OptionsPathologicalHistory[] $optionsPathologicalHistories
 * @property OptionsPersonalBackground[] $optionsPersonalBackgrounds
 * @property OptionsSocialHabits[] $optionsSocialHabits
 * @property Anamnesis $idTblAnamnesis
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
			array('id_tbl_anamnesis', 'required'),
			array('id_tbl_anamnesis', 'numerical', 'integerOnly'=>true),
			array('create_user_id, update_user_id', 'length', 'max'=>64),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_personal_background, id_tbl_anamnesis, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'optionsObstetricGynecologies' => array(self::HAS_MANY, 'OptionsObstetricGynecology', 'id_tbl_personal_background'),
			'optionsOralHabits' => array(self::HAS_MANY, 'OptionsOralHabits', 'id_tbl_personal_background'),
			'optionsPathologicalHistories' => array(self::HAS_MANY, 'OptionsPathologicalHistory', 'id_tbl_personal_background'),
			'optionsPersonalBackgrounds' => array(self::HAS_MANY, 'OptionsPersonalBackground', 'id_tbl_personal_background'),
			'optionsSocialHabits' => array(self::HAS_MANY, 'OptionsSocialHabits', 'id_tbl_personal_background'),
			'idTblAnamnesis' => array(self::BELONGS_TO, 'Anamnesis', 'id_tbl_anamnesis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_personal_background' => 'Id Tbl Personal Background',
			'id_tbl_anamnesis' => 'Identificación del Paciente',
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

	public function behaviors()
    {
        return array('ESaveRelatedBehavior' => array(
                'class' => 'application.components.ESaveRelatedBehavior')
        );
    }


	/**
	 * @return array of valid anamnesis creates
	 */
	public function getAnamnesies()
	{
		$userArray = CHtml::listData(Anamnesis::model()->findAll(array('order'=>'username')), 'username', 'username');
		return $userArray;
	}
}
