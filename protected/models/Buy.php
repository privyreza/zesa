<?php

/**
 * This is the model class for table "buy".
 *
 * The followings are the available columns in table 'buy':
 * @property integer $transactionId
 * @property string $meterNumber
 * @property double $amount
 * @property string $customerName
 * @property string $transactionDate
 * @property string $phoneNumber
 */
class Buy extends CActiveRecord
{
   
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'buy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('amount, meterNumber,customerName,phoneNumber', 'required'),
                        array('amount,meterNumber,phoneNumber', 'numerical'),
			array('meterNumber', 'length', 'max'=>11),
                        array('meterNumber', 'length', 'min'=>11),
			array('customerName', 'length', 'max'=>40),
                        array('customerName', 'length', 'min'=>4),
                        array('phoneNumber', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('transactionId,meterNumber, amount, customerName', 'safe', 'on'=>'search'),
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
			'transactionId' => 'Transaction',
			'meterNumber' => 'Meter Number',
			'amount' => 'Amount',
			'customerName' => 'Customer Name',
                    'phoneNumber' => 'Customer Name',
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

		$criteria->compare('transactionId',$this->transactionId);
		$criteria->compare('meterNumber',$this->meterNumber,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('customerName',$this->customerName,true);
		$criteria->compare('transactionDate',$this->transactionDate,true);
                $criteria->compare('phoneNumber',$this->phoneNumber,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Buy the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
