<?php

/*
 * @copyright  Copyright (c) 2013 by  ESS-UA.
 */

abstract class Ess_M2ePro_Model_Connector_Amazon_Inventory_Get_Defected_ItemsRequester
    extends Ess_M2ePro_Model_Connector_Amazon_Requester
{
    // ########################################

    public function getCommand()
    {
        return array('inventory','get','defectedItems');
    }

    // ########################################

    protected function getResponserParams()
    {
        return array(
            'account_id' => $this->account->getId(),
        );
    }

    // ########################################

    protected function getRequestData()
    {
        return array();
    }

    // ########################################

    protected function getProcessingData()
    {
        return array_merge(
            parent::getProcessingData(),
            array('perform_type' => Ess_M2ePro_Model_Processing_Request::PERFORM_TYPE_PARTIAL)
        );
    }

    // ########################################
}