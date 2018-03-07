<?php

class Wax_Horizon_IndexController extends Mage_Checkout_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}