<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%restaurant}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $region
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $open
 * @property string|null $close
 * @property int|null $deliver
 *
 * @property Employee[] $employees
 * @property Foods[] $foods
 * @property RestaurantPhoto[] $restaurantPhotos
 */
class Restaurant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%restaurant}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['open', 'close'], 'safe'],
            [['deliver'], 'integer'],
            [['name', 'region', 'phone'], 'string', 'max' => 45],
            [['address'], 'string', 'max' => 100],
            [['description'],'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'region' => 'Region',
            'address' => 'Address',
            'phone' => 'Phone',
            'open' => 'Open',
            'close' => 'Close',
            'deliver' => 'Deliver',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Employees]].
     *
     * @return \yii\db\ActiveQuery|EmployeeQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['restaurant_id' => 'id']);
    }

    /**
     * Gets query for [[Foods]].
     *
     * @return \yii\db\ActiveQuery|FoodsQuery
     */
    public function getFoods()
    {
        return $this->hasMany(Foods::className(), ['restaurant_id' => 'id']);
    }

    /**
     * Gets query for [[RestaurantPhotos]].
     *
     * @return \yii\db\ActiveQuery|RestaurantPhotoQuery
     */
    public function getRestaurantPhotos()
    {
        return $this->hasMany(RestaurantPhoto::className(), ['restaurant_id' => 'id']);
    }


    public function getRestaurantPoster() {
        return $this->hasOne(RestaurantPhoto::class, ['restaurant_id' => 'id']);
    }

    public function getPoster() {
        return $this->getRestaurantPoster()->count() ? $this->restaurantPoster : new RestaurantPhoto();
    }
    /**
     * {@inheritdoc}
     * @return RestaurantQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RestaurantQuery(get_called_class());
    }
}
