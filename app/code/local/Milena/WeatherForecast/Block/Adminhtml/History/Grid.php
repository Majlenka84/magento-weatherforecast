<?php
/**
 * Created by PhpStorm.
 * User: milena
 * Date: 2018-10-28
 * Time: 16:05
 */
class Milena_WeatherForecast_Block_Adminhtml_History_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('weatherforecast_history_grid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('DESC');
    }


    protected function _prepareCollection()
    {

        $collection = Mage::getModel('weatherforecast/lublinweather')->getCollection();
        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }


    protected function _prepareColumns()
    {
        $this->addColumn('measurement_date', array(
            'header' => $this->__('Data pomiaru'),
            'sortable' => true,
            'width' => '60',
            'index' => 'measurement_date'
        ));

        $this->addColumn('measurement_hour', array(
            'header' => $this->__('Godzina pomiaru'),
            'sortable' => true,
            'width' => '60',
            'index' => 'measurement_hour'
        ));

        $this->addColumn('temperature', array(
            'header' => $this->__('Temperatura'),
            'sortable' => true,
            'width' => '60',
            'index' => 'temperature'
        ));

        $this->addColumn('wind_speed', array(
            'header' => $this->__('Prędkość wiatru'),
            'sortable' => true,
            'width' => '60',
            'index' => 'wind_speed'
        ));

        $this->addColumn('wind_direction', array(
            'header' => $this->__('Kierunek wiatru'),
            'sortable' => true,
            'width' => '60',
            'index' => 'wind_direction'
        ));

        $this->addColumn('humidity', array(
            'header' => $this->__('Wilgotność'),
            'sortable' => true,
            'width' => '60',
            'index' => 'humidity'
        ));

        $this->addColumn('rain', array(
            'header' => $this->__('Suma opadów'),
            'sortable' => true,
            'width' => '60',
            'index' => 'rain'
        ));

        $this->addColumn('pressure', array(
            'header' => $this->__('Ciśnienie'),
            'sortable' => true,
            'width' => '60',
            'index' => 'pressure'
        ));

        return parent::_prepareColumns();
    }

    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid', array('_current'=>true));
    }
}