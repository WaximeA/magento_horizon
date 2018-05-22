<?php

class Wax_Design_Helper_Adminhtml_System_Config_Version extends Mage_Core_Helper_Abstract
{
    /**
     * Get module version number
     *
     * @param null $moduleName
     *
     * @return bool|string
     */
    public function getModuleVersion($moduleName = null)
    {
        if ($moduleName === null) {
            /** @var string $moduleName */
            $moduleName = $this->_getModuleName();
        }

        if (!Mage::getConfig()->getNode('modules/' . $moduleName)) {
            return false;
        }

        return (string)Mage::getConfig()->getModuleConfig($moduleName)->version;
    }
}