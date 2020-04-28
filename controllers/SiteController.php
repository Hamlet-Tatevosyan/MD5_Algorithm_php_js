<?php


class SiteController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
    public function actionMd5()
    {
        require_once(ROOT . '/views/site/md5.php');
        return true;

    }
    public function actionSecurity()
    {
        require_once(ROOT . '/views/site/security.php');
        return true;

    }
    public function actionAlgortihm()
    {
        require_once(ROOT . '/views/site/algorithm.php');
        return true;

    }

}