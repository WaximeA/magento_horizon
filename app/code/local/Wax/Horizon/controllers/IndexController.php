<?php

class Wax_Horizon_IndexController extends Mage_Checkout_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function accordionAction()
    {
        $this->loadLayout();
        $block = $this->getLayout()->createBlock('wax_horizon/accordion')->setTemplate('wax_horizon/accordion.phtml');
        $this->getLayout()->getBlock('content')->append($block);
        $this->renderLayout();
    }
}