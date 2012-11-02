<?php
/**
 * Controller adds new duplicateAction to populate form with block data
 *
 * @category   Brainstation
 * @package    CmsDuplicator
 * @author     Mike Becker <mike@brainstation.de>
 * @copyright Copyright (c) 2012 BrainStation (http://www.brainstation.de)
 */
include_once('Mage/Adminhtml/controllers/Cms/PageController.php');

class Brainstation_CmsDuplicator_Cms_PageController extends Mage_Adminhtml_Cms_PageController
{
    /**
     * Create block duplicate
     */
    public function duplicateAction()
    {
        // check if data sent
        if ($data = $this->getRequest()->getPost()) {
            // remove id to save as new page
            unset($data['page_id']);
            Mage::getSingleton('adminhtml/session')->setFormData($data);
        }
        $this->_redirect('*/*/edit');
        return;
    }
}