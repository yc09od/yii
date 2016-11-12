<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class AboutMeController extends Controller
{
    /**
     * @inheritdoc
     */

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionResume(){
        return $this->render('resume');
    }

    public function actionProjects(){
        return $this->render('projects');
    }

    public function actionExperience(){
        return $this->render('experience');
    }

}
