<?php

namespace app\models;

use yii\db\ActiveRecord;

class Content extends ActiveRecord
{

    public static function tableName() {
        return 'world_content';
    }

    public function getCategories()
    {
        return $this->hasMany(Categories::className(), ['category_id' => 'id']);
    }

}

class Categories extends ActiveRecord
{

    public static function tableName() {
        return 'world_categories';
    }

    public function getContent()
    {
        return $this->hasOne(Content::className(), ['id' => 'category_id']);
    }

}
