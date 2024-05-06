<?php

namespace app\controllers;

use app\models\Entity;
use app\models\forms\CreateEntityForm;
use app\models\forms\EditEntityForm;
use app\servises\EntityService;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    public function actionIndex(): string
    {
        // Yii::$app->db->open();
        Url::remember();
        $entities = Entity::find()->all();

        return $this->render('index', [
            'entities' => $entities,
        ]);
    }

    public function actionCreate(): Response|string
    {
        $model = new CreateEntityForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                if ((new EntityService())->create($model)) {
                    return $this->redirect(['site/index']);
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionEdit(?int $id = null): Response|string
    {
        $model = new EditEntityForm();
        $model->name = Entity::findOne($id)->name;
        $model->entity_id = $id;

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                if ((new EntityService())->update($model)) {
                    return $this->redirect(['site/index']);
                }
            }
        }

        return $this->render('edit', [
            'model' => $model,
        ]);
    }

    public function actionDelete(?int $id = null): Response
    {
        if ($entity = Entity::findOne($id)) {
            $entity->delete();
        }

        return $this->redirect(Url::previous());
    }
}
