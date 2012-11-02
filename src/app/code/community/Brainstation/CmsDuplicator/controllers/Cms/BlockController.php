<?php
/**
 * Controller adds new duplicateAction to populate form with block data
 *
 * @category   Brainstation
 * @package    CmsDuplicator
 * @author     Mike Becker <mike@brainstation.de>
 * @copyright Copyright (c) 2012 BrainStation (http://www.brainstation.de)
 */
include_once('Mage/Adminhtml/controllers/Cms/BlockController.php');

class Brainstation_CmsDuplicator_Cms_BlockController extends Mage_Adminhtml_Cms_BlockController
{
    /**
     * Create block duplicate
     */
    public function duplicateAction()
    {
        // check if data sent
        if ($data = $this->getRequest()->getPost()) {
            // remove id to save as new block
            unset($data['block_id']);
            Mage::getSingleton('adminhtml/session')->setFormData($data);
        }
        $this->_redirect('*/*/edit');
        return;
    }
}