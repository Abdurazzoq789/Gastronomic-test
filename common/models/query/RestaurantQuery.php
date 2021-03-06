<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[Restaurant]].
 *
 * @see Restaurant
 */
class RestaurantQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Restaurant[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Restaurant|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
