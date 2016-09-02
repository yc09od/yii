<?php
/**
 * Created by PhpStorm.
 * User: horst
 * Date: 9/2/16
 * Time: 12:48 AM
 */

namespace app\controllers;

use yii;
use yii\base\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller{

    public function actionIndex(){
        $query = Country::find();

        $pagination = new Pagination(
            [
                'defaultPageSize' => 5,
                'totalCount' => $query->count()
            ]
        );

        $countries = Country::find()->orderBy('name')
            ->offset($pagination->getOffset())
            ->limit($pagination->getLimit())
            ->all();

        return $this->render(
            'index',
            [
                'countries' => $countries,
                'pagination' => $pagination,
            ]
        );

    }

}



?>

