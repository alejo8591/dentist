<?php

/**
 * This is the model class for table "tbl_background".
 *
 * The followings are the available columns in table 'tbl_background':
 * @property integer $id_tbl_background
 * @property integer $id_tbl_personal_history
 * @property string $name_background
 * @property string $description
 * @property integer $create_user_id
 * @property string $create_time
 * @property integer $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property PersonalHistory $idTblPersonalHistory
 * @property OptionBackground[] $optionBackgrounds
 */
class Background extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_background';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_personal_history', 'required'),
			array('id_tbl_personal_history, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('name_background', 'length', 'max'=>256),
			array('description, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_background, id_tbl_personal_history, name_background, description, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'idTblPersonalHistory' => array(self::BELONGS_TO, 'PersonalHistory', 'id_tbl_personal_history'),
			'optionBackgrounds' => array(self::HAS_MANY, 'OptionBackground', 'id_tbl_background'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_background' => 'Id Tbl Background',
			'id_tbl_personal_history' => 'Id Tbl Personal History',
			'name_background' => 'Name Background',
			'description' => 'Description',
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

		$criteria->compare('id_tbl_background',$this->id_tbl_background);
		$criteria->compare('id_tbl_personal_history',$this->id_tbl_personal_history);
		$criteria->compare('name_background',$this->name_background,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Background the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
