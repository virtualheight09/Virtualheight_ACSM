<?php
/**
 * Copyright © Virtual Height PVT LTD All rights reserved.
 * See COPYING.txt for license details.
 */
 
namespace Virtualheight\ACSM\Block\Adminhtml\System\Config;
use Magento\Framework\Registry;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Support extends \Magento\Config\Block\System\Config\Form\Field
{	
	
	public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element) {
       $html = '';
		$html .= '<div style="float: left;">
<a href="https://www.www.virtualheight.com" target="_blank"><img src="https://www.virtualheight.com/img/vh-main-small-logo.png" style="float:left; padding-right: 35px; margin-top: 30px;" /></a></div>
<div style="float:left">
<h2><b>VirtualHeight Add to Cart Success Message Modal Popup Extension</b></h2>
<p>
<b>Installed Version: v1.0.0</b><br>
Website: <a target="_blank" href="https://www.virtualheight.com/">https://www.virtualheight.com/</a><br>
Like, share and follow us on 
<a target="_blank" href="https://www.facebook.com/virtualheightitservices/">Facebook</a>, 
<a target="_blank" href="https://www.instagram.com/virtualheight/">Instagram</a> and
<a target="_blank" href="https://twitter.com/virtualheight">Twitter</a>.<br>
Do you need Extension Support? Please create support ticket from <a href="#!" target="_blank">here</a> or <br> please contact us on <a href="mailto:savan@virtualheight.com">savan@virtualheight.com</a> for quick reply.
</p>
</div>
';	
        return $html;
    }
}