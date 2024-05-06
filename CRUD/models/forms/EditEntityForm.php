<?php

namespace app\models\forms;

use app\models\Entity;
use yii\base\Model;

class EditEntityForm extends Model
{
    public $name;
    public $entity_id;

    public function rules(): array
    {
        return [
            [['name'], 'trim'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 128],
            [['name'], 'unique', 'targetClass' => Entity::class, 'targetAttribute' => 'name'],

            [['entity_id'], 'required'],
            [['entity_id'], 'integer'],
            [['entity_id'], 'exist', 'targetClass' => Entity::class, 'targetAttribute' => 'id'],
        ];
    }
}
