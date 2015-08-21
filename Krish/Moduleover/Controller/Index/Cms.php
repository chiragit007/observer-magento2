<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Krish\Moduleover\Controller\Index;

class Cms extends \Magento\Cms\Controller\Page\Router
{
    /**
     * Show Contact Us page
     *
     * @return void
     */
    public function execute($coreRoute = null)
    {
        //$this->messageManager->addSuccess(__('Your question has beeen submitted successfully.'));    
        die('CMS page overrided');
        //$this->messageManager->addSuccess('Message from overrided controller.');
        return parent::execute($coreRoute);

    }
}
