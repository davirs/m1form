<?php 
class Velanapps_Ecfplus_Block_Adminhtml_Storelocator_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
 
    public function __construct()
    {
        parent::__construct();
        $this->setId('ecfplus_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('ecfplus')->__('Storelocator Information'));
    }
 
    protected function _beforeToHtml()
    {
        $this->addTab('form_section', array(
            'label'     => Mage::helper('ecfplus')->__('General Information'),
            'title'     => Mage::helper('ecfplus')->__('General Information'),
            'content'   => $this->getLayout()->createBlock('ecfplus/adminhtml_storelocator_edit_tab_form')->toHtml(),
        ));
		
/* 		if( Mage::registry('storelocator_data') && Mage::registry('storelocator_data')->getId() )
		{
			$this->addTab('form_section1', array(
				'label'     => Mage::helper('ecfplus')->__('Manage Reports'),
				'title'     => Mage::helper('ecfplus')->__('Manage Reports'), */
				//'content'   => $this->getLayout()->createBlock('ecfplus/adminhtml_manage')->toHtml(),
				/* 'content'   => $this->getLayout()->createBlock('ecfplus/adminhtml_multiform_edit_tab_form1
				')->toHtml(), */
			//	'url'       => $this->getUrl('*/adminhtml_storelocator/index', array('_current' => true)),
				//'class'     => 'ajax',
			//));
        //} 
       
        return parent::_beforeToHtml();
    }
}