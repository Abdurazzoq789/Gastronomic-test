<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%foods}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $type
 * @property string|null $ingredient
 * @property int $restaurant_id
 *
 * @property Restaurant $restaurant
 * @property FoodsPhoto[] $foodsPhotos
 */
class Foods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%foods}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['restaurant_id'], 'required'],
            [['restaurant_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['type','foodCountry'], 'string', 'max' => 45],
            [['ingredient'], 'string', 'max' => 255],
            [['restaurant_id'], 'exist', 'skipOnError' => true, 'targetClass' => Restaurant::className(), 'targetAttribute' => ['restaurant_id' => 'id']],
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
            'description' => 'Description',
            'type' => 'Type',
            'ingredient' => 'Ingredient',
            'restaurant_id' => 'Restaurant ID',
            'foodCountry' => 'FoodsCountry',
        ];
    }

    /**
     * Gets query for [[Restaurant]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RestaurantQuery
     */
    public function getRestaurant()
    {
        return $this->hasOne(Restaurant::className(), ['id' => 'restaurant_id']);
    }

    /**
     * Gets query for [[FoodsPhotos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\FoodsPhotoQuery
     */
    public function getFoodsPhotos()
    {
        return $this->hasMany(FoodsPhoto::className(), ['foods_id' => 'id']);
    }

    public function getFoodsPoster() {
        return $this->hasOne(FoodsPhoto::class, ['foods_id' => 'id']);
    }

    public function getPoster() {
        return $this->getFoodsPoster()->count() ? $this->foodsPoster : new foodsPhoto();
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FoodsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FoodsQuery(get_called_class());
    }
}
