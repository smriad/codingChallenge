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
class Vehicletypes extends CActiveRecord
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
		return '{{vehicletypes}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, rate_per_km, active', 'required'),
			array('rate_per_km, rate_per_km_personal, rate_per_km_external, active', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>127),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type, rate_per_km, rate_per_km_personal, rate_per_km_external, active', 'safe', 'on'=>'search'),
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
			'type' => 'Type',
			'rate_per_km' => 'Rate Per KM',
			'rate_per_km_personal' => 'Rate Per KM (Personal)',
			'rate_per_km_external' => 'Rate Per KM (External)',
			'active' => 'Active',
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('rate_per_km',$this->rate_per_km);
		$criteria->compare('rate_per_km_personal',$this->rate_per_km_personal);
		$criteria->compare('rate_per_km_external',$this->rate_per_km_external);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>40,
            ),
		));
	}
}