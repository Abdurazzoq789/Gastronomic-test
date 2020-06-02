<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%newsPhoto}}".
 *
 * @property int $id
 * @property string|null $photo
 * @property int $news_id
 *
 * @property News $news
 */
class NewsPhoto extends \yii\db\ActiveRecord
{

    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%newsPhoto}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file'],'file'],
            [['news_id'], 'required'],
            [['news_id'], 'integer'],
            [['photo'], 'string', 'max' => 45],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['news_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
            'news_id' => 'News ID',
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\NewsQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::className(), ['id' => 'news_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\NewsPhotoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\NewsPhotoQuery(get_called_class());
    }
}
