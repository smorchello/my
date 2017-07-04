<?php

/**
 * This is the model class for table "{{page}}".
 *
 * The followings are the available columns in table '{{page}}':
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property string $url
 * @property integer $created
 * @property integer $updated
 * @property integer $status
 */
class Page extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return '{{page}}';
	}
	
	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (
				array (
						'created, updated, status',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'title',
						'length',
						'max' => 50 
				),
				array (
						'url',
						'length',
						'max' => 20 
				),
				array (
						'body',
						'safe' 
				),
				// The following rule is used by search().
				// @todo Please remove those attributes that should not be searched.
				array (
						'id, title, body, url, created, updated, status',
						'safe',
						'on' => 'search' 
				) 
		);
	}
	
	/**
	 *
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array ();
	}
	
	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array (
				'id' => 'ID',
				'title' => 'Title',
				'body' => 'Body',
				'url' => 'Url',
				'created' => 'Created',
				'updated' => 'Updated',
				'status' => 'Status' 
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
	 *         based on the search/filter conditions.
	 */
	public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.
		$criteria = new CDbCriteria ();
		
		$criteria->compare ( 'id', $this->id );
		$criteria->compare ( 'title', $this->title, true );
		$criteria->compare ( 'body', $this->body, true );
		$criteria->compare ( 'url', $this->url, true );
		$criteria->compare ( 'created', $this->created );
		$criteria->compare ( 'updated', $this->updated );
		$criteria->compare ( 'status', $this->status );
		
		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 *
	 * @param string $className
	 *        	active record class name.
	 * @return Page the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
	
	public function getPageUrl(){
		return 'page/index/id' . $this->id;
	}
	
	public static function getUrl() {
		$items = self::model ()->findAll ( array (
				'select' => 'id, url' 
		) );
		
		
		
		return Chtml::listData ( $items, 'url', 'pageUrl' );
	}
}
