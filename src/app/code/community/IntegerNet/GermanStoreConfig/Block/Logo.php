<?php

class IntegerNet_GermanStoreConfig_Block_Logo extends Mage_Adminhtml_Block_Template
{
    /**
     * @return bool
     */
    public function isActive()
    {
        return Mage::getStoreConfigFlag('admin/germanstoreconfig/display_logo');
    }

    /**
     * @return string
     */
    public function getLinkUrl()
    {
        $localeCode = Mage::app()->getLocale()->getLocaleCode();
        if (strpos($localeCode, 'de_') === 0) {
            return Mage::getStoreConfig('germanstoreconfig/magentode_url_de');
        } else {
            return Mage::getStoreConfig('germanstoreconfig/magentode_url_en');
        }
    }

    /**
     * Get language dependant URL of germanstoreconfig logo
     *
     * @return string
     */
    public function getLogoUrl()
    {
        $localeCode = Mage::app()->getLocale()->getLocaleCode();
        if (strpos($localeCode, 'de_') === 0) {
            return $this->getSkinUrl('germanstoreconfig/logo-swissstoreconfig-ch.png');
        } else {
            return $this->getSkinUrl('germanstoreconfig/logo-swissstoreconfig-ch.png');
        }
    }

    /**
     * @return string
     */
    public function getLogoAlt()
    {
        return Mage::helper('germanstoreconfig')->__(Mage::getStoreConfig('germanstoreconfig/module_title'));
    }
}
