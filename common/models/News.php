<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%news}}".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $date
 * @property string|null $description
 *
 * @property NewsPhoto[] $newsPhotos
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'date' => 'Date',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[NewsPhotos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\NewsPhotoQuery
     */
    public function getNewsPhotos()
    {
        return $this->hasMany(NewsPhoto::className(), ['news_id' => 'id']);
    }

    public function getNewsPoster() {
        return $this->hasOne(NewsPhoto::class, ['news_id' => 'id']);
    }

    public function getPoster() {
        return $this->getNewsPoster()->count() ? $this->newsPoster : new newsPhoto();
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\NewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\NewsQuery(get_called_class());
    }

    public function getLink() {
        return \Yii::$app->urlManager->createUrl([
            'news/show'
        ]);
    }
}
