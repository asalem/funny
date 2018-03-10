<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Offers]].
 *
 * @see City
 */
class OffersQuery extends \hiqdev\hiart\ActiveQuery
{
    
    /**
     * @inheritdoc
     * @return Offers[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Offers|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
