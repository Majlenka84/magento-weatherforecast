<?php
/**
 * Created by PhpStorm.
 * User: milena
 * Date: 2018-10-28
 * Time: 12:45
 */
class Milena_WeatherForecast_Model_Resource_Lublinweather extends Mage_Core_Model_Resource_Db_Abstract{
    protected function _construct()
    {
        $this->_init('weatherforecast/lublinweather', 'id');
    }


    public function getCollection() {
        return Mage::getResourceModel('weatherforecast/lublinweather_collection');
    }

    public function loadLastRecord(Milena_WeatherForecast_Model_Lublinweather $Object)
    {
        $adapter = $this->_getReadAdapter();
        $select  = $adapter->select()
            ->from($this->getMainTable(), 'id')
            ->order('id DESC');

        $modelId = $adapter->fetchOne($select);
        if ($modelId) {
            $this->load($Object, $modelId );
        } else {
            $Object->setData(array());
        }

        return $this;
    }
}