<?php
namespace Mad\Ordercolumn\Observer;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;

class AddDataToPlacedBy implements ObserverInterface
{
    /**
     * add Placedby to order
     *
     * @param EventObserver $observer
     * 
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();
        if($order->getRemoteIp() != ""){
            $order->setPlacedBy(1);
        }
    }
}