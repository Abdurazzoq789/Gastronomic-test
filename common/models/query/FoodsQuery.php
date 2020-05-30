<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Foods]].
 *
 * @see \common\models\Foods
 */
class FoodsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Foods[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Foods|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
