<?php

/**
 * This is the model class for table "tbl_periodontal_examination".
 *
 * The followings are the available columns in table 'tbl_periodontal_examination':
 * @property integer $id_tbl_periodontal_examination
 * @property integer $id_tbl_anamnesis
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 * @property string $description_periodontal_examination
 *
 * The followings are the available model relations:
 * @property Intcp[] $intcps
 * @property IntcpSilnessLoe[] $intcpSilnessLoes
 * @property PeriodontalBrushing[] $periodontalBrushings
 * @property PeriodontalChart[] $periodontalCharts
 * @property Anamnesis $idTblAnamnesis
 * @property PeriodontalTechniqueBrushing[] $periodontalTechniqueBrushings
 */
class PeriodontalExamination extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_periodontal_examination';
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
			array('create_time, update_time, description_periodontal_examination', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_periodontal_examination, id_tbl_anamnesis, create_user_id, create_time, update_user_id, update_time, description_periodontal_examination', 'safe', 'on'=>'search'),
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
			'intcps' => array(self::HAS_MANY, 'Intcp', 'id_tbl_periodontal_examination'),
			'intcpSilnessLoes' => array(self::HAS_MANY, 'IntcpSilnessLoe', 'id_tbl_periodontal_examination'),
			'periodontalBrushings' => array(self::HAS_MANY, 'PeriodontalBrushing', 'id_tbl_periodontal_examination'),
			'periodontalCharts' => array(self::HAS_MANY, 'PeriodontalChart', 'id_tbl_periodontal_examination'),
			'idTblAnamnesis' => array(self::BELONGS_TO, 'Anamnesis', 'id_tbl_anamnesis'),
			'periodontalTechniqueBrushings' => array(self::HAS_MANY, 'PeriodontalTechniqueBrushing', 'id_tbl_periodontal_examination'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_periodontal_examination' => 'Id Tbl Periodontal Examination',
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
			'create_user_id' => 'Create User',
			'create_time' => 'Create Time',
			'update_user_id' => 'Update User',
			'update_time' => 'Update Time',
			'description_periodontal_examination' => 'Description Periodontal Examination',
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

		$criteria->compare('id_tbl_periodontal_examination',$this->id_tbl_periodontal_examination);
		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('description_periodontal_examination',$this->description_periodontal_examination,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PeriodontalExamination the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
