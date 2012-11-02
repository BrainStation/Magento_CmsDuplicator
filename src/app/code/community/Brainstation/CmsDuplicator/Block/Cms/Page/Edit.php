<?php
/**
 * Block adds new Duplicate button and provide additional js-function
 *
 * @category   Brainstation
 * @package    CmsDuplicator
 * @author     Mike Becker <mike@brainstation.de>
 * @copyright Copyright (c) 2012 BrainStation (http://www.brainstation.de)
 */
class Brainstation_CmsDuplicator_Block_Cms_Page_Edit extends Mage_Adminhtml_Block_Cms_Page_Edit
{
    /**
     * add duplicate button
     */
    public function __construct()
    {
        parent::__construct();

        $this->_addButton('duplicate', array(
            'label'     => Mage::helper('adminhtml')->__('Duplicate'),
            'onclick'   => 'duplicateAndContinueEdit()',
            'class'     => 'add',
        ), -100);

        $this->_formScripts[] = "
            function duplicateAndContinueEdit(){
                var submitUrl = $('edit_form').action;
                editForm.submit(submitUrl.replace('save/','duplicate/'));
            }
        ";
    }
}