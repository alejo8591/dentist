<?php

/**
 * This is the model class for table "tbl_physical_examination".
 *
 * The followings are the available columns in table 'tbl_physical_examination':
 * @property integer $id_tbl_physical_examination
 * @property integer $id_tbl_anamnesis
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property OptionsExtraoralExamination[] $optionsExtraoralExaminations
 * @property OptionsLymphadenopathy[] $optionsLymphadenopathies
 * @property OptionsNeck[] $optionsNecks
 * @property OptionsSystems[] $optionsSystems
 * @property OptionsVitalSigns[] $optionsVitalSigns
 * @property Anamnesis $idTblAnamnesis
 */
class PhysicalExamination extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_physical_examination';
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
			array('id_tbl_physical_examination, id_tbl_anamnesis, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'optionsExtraoralExaminations' => array(self::HAS_MANY, 'OptionsExtraoralExamination', 'id_tbl_physical_examination'),
			'optionsLymphadenopathies' => array(self::HAS_MANY, 'OptionsLymphadenopathy', 'id_tbl_physical_examination'),
			'optionsNecks' => array(self::HAS_MANY, 'OptionsNeck', 'id_tbl_physical_examination'),
			'optionsSystems' => array(self::HAS_MANY, 'OptionsSystems', 'id_tbl_physical_examination'),
			'optionsVitalSigns' => array(self::HAS_MANY, 'OptionsVitalSigns', 'id_tbl_physical_examination'),
			'idTblAnamnesis' => array(self::BELONGS_TO, 'Anamnesis', 'id_tbl_anamnesis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_physical_examination' => 'Id Tbl Physical Examination',
			'id_tbl_anamnesis' => 'Número de Anamnesis',
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

		$criteria->compare('id_tbl_physical_examination',$this->id_tbl_physical_examination);
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
	 * @return PhysicalExamination the static model class
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
