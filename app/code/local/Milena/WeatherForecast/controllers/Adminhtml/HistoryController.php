<?php
/**
 * Created by PhpStorm.
 * User: milena
 * Date: 2018-10-27
 * Time: 21:00
 */

class Milena_WeatherForecast_Adminhtml_HistoryController extends Mage_Adminhtml_Controller_Action {

    /**
     * Admin controller index action
     *
     * @access public
     * @return void
     */

    public function indexAction() {

        $this->loadLayout();
        try {
            $this->_setActiveMenu('weatherforecast');
            //create a text block with the name of "example-block"
            $block = $this->getLayout()
                ->createBlock('core/text')
                ->setText('<h1>Pogoda w Lublinie</h1>');

            $this->_addContent($block);
            $this->_addContent($this->getLayout()->createBlock('weatherforecast/adminhtml_history'));

        } catch (Exception $e) {
            Mage::logException($e);
        }
        $this->renderLayout();
    }

    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('weatherforecast/adminhtml_history_grid')->toHtml()
        );
    }
}