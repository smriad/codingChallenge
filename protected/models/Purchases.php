<?php

/**
 * This is the model class for table "{{vehicletypes}}".
 *
 * The followings are the available columns in table '{{vehicletypes}}':
 * @property integer $id
 * @property string $type
 * @property integer $rate_per_km
 * @property integer $rate_per_km_personal
 * @property integer $rate_per_km_external
 * @property integer $active
 */
class Purchases extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vehicletypes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{purchases}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customerName, offeringID, quantity', 'required'),
			array('offeringID, quantity', 'numerical', 'integerOnly'=>true),
			array('customerName', 'length', 'max'=>127),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, customerName, offeringID, quantity', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'customerName' => 'customerName',
			'offeringID' => 'offeringID',
			'quantity' => 'quantity',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('customerName',$this->customerName,true);
		$criteria->compare('offeringID',$this->offeringID);
		$criteria->compare('quantity',$this->quantity);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>40,
            ),
		));
	}
}