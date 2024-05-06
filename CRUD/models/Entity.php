<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property string $name
 */
class Entity extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%entity}}';
    }

    public function rules(): array
    {
        return [
            [['name'], 'trim'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 128],
            [['name'], 'unique', 'targetClass' => Entity::class, 'targetAttribute' => 'name'],

        ];
    }
}