<?php
/**
 * Created by PhpStorm.
 * User: horst
<<<<<<< HEAD
 * Date: 9/2/16
 * Time: 12:48 AM
 */

namespace app\controllers;

use yii;
use yii\base\Controller;
=======
 * Date: 9/1/16
 * Time: 11:47 PM
 */
namespace app\controllers;

use Yii;
use yii\web\Controller;
>>>>>>> 5c2cd6df72fca0bcc78a9902047e490d28aeaca2
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller{

    public function actionIndex(){
<<<<<<< HEAD

=======
>>>>>>> 5c2cd6df72fca0bcc78a9902047e490d28aeaca2
        $query = Country::find();

        $pagination = new Pagination(
            [
                'defaultPageSize' => 5,
                'totalCount' => $query->count()
            ]
        );

<<<<<<< HEAD
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
=======
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
>>>>>>> 5c2cd6df72fca0bcc78a9902047e490d28aeaca2

}


<<<<<<< HEAD
?>
=======
?>
>>>>>>> 5c2cd6df72fca0bcc78a9902047e490d28aeaca2
