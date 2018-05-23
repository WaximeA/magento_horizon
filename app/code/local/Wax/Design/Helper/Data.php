<?php

class Wax_Design_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @var string CONFIG_ADDITIONAL_LOGO
     */
    const CONFIG_ADDITIONAL_LOGO = 'wax_design/custom_fields/additional_logo';

    /**
     * @var string FILE_PATH_MEDIA_DIRECTORY
     */
    const FILE_PATH_MEDIA_DIRECTORY = 'wax_design_logo';

    /**
     * Retrive custom field additional logo file name
     *
     * @return void
     */
    public function getAdditionalLogoFileName()
    {
        /** @var string $fileName */
        $fileName = Mage::getStoreConfig(self::CONFIG_ADDITIONAL_LOGO);

        return $fileName;
    }

    /**
     * Get file path
     *
     * @param $fileName
     *
     * @return string
     */
    public function getFilePath($fileName)
    {
        /** @var string $filePath */
        $filePath = Mage::getBaseUrl('media') . self::FILE_PATH_MEDIA_DIRECTORY . DS . $fileName;

        return $filePath;
    }
}