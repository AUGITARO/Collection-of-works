<?php

namespace app\servises;

use app\models\Entity;
use app\models\forms\CreateEntityForm;
use app\models\forms\EditEntityForm;

class EntityService
{
    public function create(CreateEntityForm $model): bool
    {
        $entity = new Entity();
        $entity->name = $model->name;

        return $entity->save();
    }

    public function update(EditEntityForm $model): bool
    {
        $entity = Entity::findOne($model->entity_id);
        $entity->name = $model->name;

        return $entity->save();
    }
}