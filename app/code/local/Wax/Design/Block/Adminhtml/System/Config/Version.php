<?php

class Wax_Design_Block_Adminhtml_System_Config_Version extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    /**
     * Get element HTML
     *
     * @param Varien_Data_Form_Element_Abstract $element
     *
     * @return string
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        return (string)Mage::helper('wax_design/adminhtml_system_config_version')->getModuleVersion();
    }
}