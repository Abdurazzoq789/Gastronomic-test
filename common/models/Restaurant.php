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
 *
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
            [['name', 'region'], 'string', 'max' => 45],
            [['address'], 'string', 'max' => 100],
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
        ];
    }

    /**
     * Gets query for [[Foods]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\FoodsQuery
     */
    public function getFoods()
    {
        return $this->hasMany(Foods::className(), ['restaurant_id' => 'id']);
    }

    /**
     * Gets query for [[RestaurantPhotos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RestaurantPhotoQuery
     */
    public function getRestaurantPhotos()
    {
        return $this->hasMany(RestaurantPhoto::className(), ['restaurant_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\RestaurantQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RestaurantQuery(get_called_class());
    }
}
