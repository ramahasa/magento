<?php

class Payfort_Pay_Adminhtml_Model_System_Config_Source_Commandoptions {
    /*     * */

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        return array(
            array('value' => 'AUTHORIZATION', 'label' => Mage::helper('adminhtml')->__('AUTHORIZATION')),
            array('value' => 'PURCHASE', 'label' => Mage::helper('adminhtml')->__('PURCHASE')),
        );
    }

}
