<?php
class Milena_WeatherForecast_Block_Adminhtml_History extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'weatherforecast';
        $this->_controller = 'adminhtml_history';
        $this->_headerText = $this->__('Dane historyczne');
        parent::__construct();
        $this->_removeButton('add');
    }
}