<?php
/**
 * Created by PhpStorm.
 * User: horst
 * Date: 9/1/16
 * Time: 11:47 PM
 */
namespace app\controllers;

use Yii;
use yii\web\Controller;
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

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',
        [
            'countries' => $countries,
            'pagination' => $pagination
        ]);

    }//end actionIndex

}


?>