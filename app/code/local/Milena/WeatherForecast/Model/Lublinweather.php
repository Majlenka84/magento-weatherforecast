<?php
/**
 * Created by PhpStorm.
 * User: milena
 * Date: 2018-10-28
 * Time: 12:40
 */

class Milena_WeatherForecast_Model_Lublinweather extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('weatherforecast/lublinweather');
    }

    public function loadLastRecord()
    {
        $this->_getResource()->loadLastRecord($this);
        return $this;
    }

}