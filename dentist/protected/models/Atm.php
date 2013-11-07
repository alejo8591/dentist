<?php

/**
 * This is the model class for table "tbl_atm".
 *
 * The followings are the available columns in table 'tbl_atm':
 * @property integer $id_tbl_atm
 * @property string $username
 * @property integer $id_tbl_anamnesis
 * @property string $observation_atm
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Anamnesis $idTblAnamnesis
 * @property Anamnesis $username0
 * @property OptionsAtm[] $optionsAtms
 * @property OptionsAtm[] $optionsAtms1
 * @property OptionsAtm[] $optionsAtms2
 * @property OptionsAtmIntraoralHardTissue[] $optionsAtmIntraoralHardTissues
 * @property OptionsAtmIntraoralHardTissue[] $optionsAtmIntraoralHardTissues1
 * @property OptionsAtmIntraoralHardTissue[] $optionsAtmIntraoralHardTissues2
 * @property OptionsAtmIntraoralSoftTissue[] $optionsAtmIntraoralSoftTissues
 * @property OptionsAtmIntraoralSoftTissue[] $optionsAtmIntraoralSoftTissues1
 * @property OptionsAtmIntraoralSoftTissue[] $optionsAtmIntraoralSoftTissues2
 * @property OptionsAtmMandibularMovements[] $optionsAtmMandibularMovements
 * @property OptionsAtmMandibularMovements[] $optionsAtmMandibularMovements1
 * @property OptionsAtmMandibularMovements[] $optionsAtmMandibularMovements2
 * @property OptionsAtmSoftTissue[] $optionsAtmSoftTissues
 * @property OptionsAtmSoftTissue[] $optionsAtmSoftTissues1
 * @property OptionsAtmSoftTissue[] $optionsAtmSoftTissues2
 */
class Atm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_atm';
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
			array('observation_atm, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_atm, username, id_tbl_anamnesis, observation_atm, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'idTblAnamnesis' => array(self::BELONGS_TO, 'Anamnesis', 'id_tbl_anamnesis'),
			'username0' => array(self::BELONGS_TO, 'Anamnesis', 'username'),
			'optionsAtms' => array(self::HAS_MANY, 'OptionsAtm', 'id_tbl_atm'),
			'optionsAtms1' => array(self::HAS_MANY, 'OptionsAtm', 'username'),
			'optionsAtms2' => array(self::HAS_MANY, 'OptionsAtm', 'id_tbl_anamnesis'),
			'optionsAtmIntraoralHardTissues' => array(self::HAS_MANY, 'OptionsAtmIntraoralHardTissue', 'id_tbl_atm'),
			'optionsAtmIntraoralHardTissues1' => array(self::HAS_MANY, 'OptionsAtmIntraoralHardTissue', 'username'),
			'optionsAtmIntraoralHardTissues2' => array(self::HAS_MANY, 'OptionsAtmIntraoralHardTissue', 'id_tbl_anamnesis'),
			'optionsAtmIntraoralSoftTissues' => array(self::HAS_MANY, 'OptionsAtmIntraoralSoftTissue', 'id_tbl_atm'),
			'optionsAtmIntraoralSoftTissues1' => array(self::HAS_MANY, 'OptionsAtmIntraoralSoftTissue', 'username'),
			'optionsAtmIntraoralSoftTissues2' => array(self::HAS_MANY, 'OptionsAtmIntraoralSoftTissue', 'id_tbl_anamnesis'),
			'optionsAtmMandibularMovements' => array(self::HAS_MANY, 'OptionsAtmMandibularMovements', 'id_tbl_atm'),
			'optionsAtmMandibularMovements1' => array(self::HAS_MANY, 'OptionsAtmMandibularMovements', 'username'),
			'optionsAtmMandibularMovements2' => array(self::HAS_MANY, 'OptionsAtmMandibularMovements', 'id_tbl_anamnesis'),
			'optionsAtmSoftTissues' => array(self::HAS_MANY, 'OptionsAtmSoftTissue', 'id_tbl_atm'),
			'optionsAtmSoftTissues1' => array(self::HAS_MANY, 'OptionsAtmSoftTissue', 'username'),
			'optionsAtmSoftTissues2' => array(self::HAS_MANY, 'OptionsAtmSoftTissue', 'id_tbl_anamnesis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_atm' => 'Id Tbl Atm',
			'username' => 'Username',
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
			'observation_atm' => 'Observation Atm',
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

		$criteria->compare('id_tbl_atm',$this->id_tbl_atm);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
		$criteria->compare('observation_atm',$this->observation_atm,true);
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
	 * @return Atm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
