<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Krish\Moduleover\Model;

class Observer
{
    /**
     * Show Contact Us page
     *
     * @return void
     */
    public function testcatalog(\Magento\Framework\Event\Observer $observe)
    {
        die('Model observer called');
        
    }

}