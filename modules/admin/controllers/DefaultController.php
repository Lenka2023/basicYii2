<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionOne()
    {
        return $this->render('article');
    }
    public function actionTwo()
    {
        return $this->render('catalog');
    }
    public function actionThree()
    {
        return $this->render('catalog-cart');
    }
    public function actionFour()
    {
        return $this->render('catalog-subcategory');
    }
    public function actionFive()
    {
        return $this->render('company');
    }
    public function actionSix()
    {
        return $this->render('designers');
    }
    public function actionSeven()
    {
        return $this->render('news');
    }
    public function actionEight()
    {
        return $this->render('project');
    }
    public function actionNine()
    {
        return $this->render('projects');
    }
    public function actionTen()
    {
        return $this->render('search');
    }
    public function actionEleven()
    {
        return $this->render('service');
    }
    public function actionTwelve()
    {
        return $this->render('techinfo');
    }
    public function actionThirghty()
    {
        return $this->render('indexx');
    }
}
