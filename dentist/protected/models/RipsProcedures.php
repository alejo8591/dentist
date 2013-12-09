<?php

/**
 * This is the model class for table "tbl_rips_procedures".
 *
 * The followings are the available columns in table 'tbl_rips_procedures':
 * @property integer $id_tbl_rips_procedures
 * @property integer $id_tbl_rips
 * @property string $cie10_code
 * @property string $cups_code
 * @property string $value_procedure
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Rips $idTblRips
 */
class RipsProcedures extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_rips_procedures';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_rips', 'required'),
			array('id_tbl_rips', 'numerical', 'integerOnly'=>true),
			array('cie10_code, cups_code', 'length', 'max'=>128),
			array('value_procedure', 'length', 'max'=>256),
			array('create_user_id, update_user_id', 'length', 'max'=>64),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_rips_procedures, id_tbl_rips, cie10_code, cups_code, value_procedure, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'idTblRips' => array(self::BELONGS_TO, 'Rips', 'id_tbl_rips'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_rips_procedures' => 'Id Tbl Rips Procedures',
			'id_tbl_rips' => 'Id Tbl Rips',
			'cie10_code' => 'Cie10 Code',
			'cups_code' => 'Cups Code',
			'value_procedure' => 'Value Procedure',
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

		$criteria->compare('id_tbl_rips_procedures',$this->id_tbl_rips_procedures);
		$criteria->compare('id_tbl_rips',$this->id_tbl_rips);
		$criteria->compare('cie10_code',$this->cie10_code,true);
		$criteria->compare('cups_code',$this->cups_code,true);
		$criteria->compare('value_procedure',$this->value_procedure,true);
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
	 * @return RipsProcedures the static model class
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
}
