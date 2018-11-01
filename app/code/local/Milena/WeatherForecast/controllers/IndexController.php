<?php
/**
 * Created by PhpStorm.
 * User: milena
 * Date: 2018-10-27
 * Time: 12:49
 */

class Milena_WeatherForecast_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $weather = Mage::getModel('weatherforecast/lublinweather');
        $weather->loadLastRecord();
        $data = $weather->getData();
        $this->loadLayout();
        Mage::register('data', $data);
        $this->renderLayout();
    }


}