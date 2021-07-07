<?php
/**
 * Copyright © Virtual Height PVT LTD All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Virtualheight\ACSM\Helper;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
   	protected $_scopeConfig;
    public function __construct(
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {     
		$this->_scopeConfig = $scopeConfig;
   	}  
	public function getStatus(){
  		return $this->_scopeConfig->getValue('acsm/general/acsmenable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	public function getPosition(){
  		return $this->_scopeConfig->getValue('acsm/general/acsmposition', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function getMsgwidth(){
  		return $this->_scopeConfig->getValue('acsm/general/msgwidth', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	public function getCloseoptions(){
  		return $this->_scopeConfig->getValue('acsm/general/closeoptions', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	public function getSuccessbgcolor(){
  		return $this->_scopeConfig->getValue('acsm/general/successbgcolor', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	public function getSuccessforecolor(){
  		return $this->_scopeConfig->getValue('acsm/general/successforecolor', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function getErrorbgcolor(){
  		return $this->_scopeConfig->getValue('acsm/general/errorbgcolor', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function getErrorforecolor(){
  		return $this->_scopeConfig->getValue('acsm/general/errorforecolor', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	public function getNoticebgcolor(){
  		return $this->_scopeConfig->getValue('acsm/general/noticebgcolor', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}	

	public function getNoticeforecolor(){
  		return $this->_scopeConfig->getValue('acsm/general/noticeforecolor', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function getWarningbgcolor(){
  		return $this->_scopeConfig->getValue('acsm/general/warningbgcolor', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	public function getWarningforecolor(){
  		return $this->_scopeConfig->getValue('acsm/general/warningforecolor', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getSuccessfontsize(){
  		return $this->_scopeConfig->getValue('acsm/general/successfontsize', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getErrorfontsize(){
  		return $this->_scopeConfig->getValue('acsm/general/errorfontsize', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getNoticefontsize(){
  		return $this->_scopeConfig->getValue('acsm/general/noticefontsize', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getWarningfontsize(){
  		return $this->_scopeConfig->getValue('acsm/general/warningfontsize', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	public function getSuccesspadding(){
  		return $this->_scopeConfig->getValue('acsm/general/successpadding', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getErrorpadding(){
  		return $this->_scopeConfig->getValue('acsm/general/errorpadding', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getNoticepadding(){
  		return $this->_scopeConfig->getValue('acsm/general/noticepadding', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getWarningpadding(){
  		return $this->_scopeConfig->getValue('acsm/general/warningpadding', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getMbautotime(){
  		return $this->_scopeConfig->getValue('acsm/general/mbautotime', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getPopuptype(){
  		return $this->_scopeConfig->getValue('acsm/general/acsmpopuptype', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
}