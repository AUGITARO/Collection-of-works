<?php

namespace app\models\forms;

use app\models\Entity;
use yii\base\Model;

class CreateEntityForm extends Model
{
    public $name;

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
