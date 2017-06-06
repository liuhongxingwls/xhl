<?php

namespace rbac\controllers;

use rbac\components\CController;
use rbac\models\Admin;
use rbac\models\searchs\AdminSearch;
use Yii;
use common\models\BasicCarBrand;

/**
 * DefaultController.
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 *
 * @since 1.0
 */
class AdminController extends CController
{
    /**
     * Action index.
     */
    public function actionIndex()
    {
        $searchModel = new AdminSearch();
        $params = Yii::$app->request->queryParams;
        $dataProvider = $searchModel->search($params);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionCreate()
    {
        $model = new Admin();
        $data = array();

        if (!empty(Yii::$app->request->post())) {
            $model->load(Yii::$app->request->post());
            $model->setPassword($model->password);
            $model->status = 1;
            if ($model->save()){
                return $this->redirect(['admin/index']);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    
    public function actionUpdate($id)
    {
        $model = Admin::findOne($id);
        $data = array();

        if (!empty(Yii::$app->request->post())) {
            $model->load(Yii::$app->request->post());
            $model->setPassword($model->password);
            if ($model->save()){
                return $this->redirect(['admin/index']);
            }
        }
        
        return $this->render('update', [
            'model' => $model,
        ]);
    }
}
