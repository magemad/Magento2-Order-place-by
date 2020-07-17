<?php

namespace Mad\Ordercolumn\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
	public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
		$installer = $setup;
		$installer->startSetup();
        
        $fieldName = "placed_by";
        $fieldTitle = "Placed By";
        
        $orderTable = 'sales_order';
		$orderGridTable = 'sales_order_grid';
        
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($orderTable),
                $fieldName,
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
                    'default' => 0,
                    'comment' => $fieldTitle
                ]
            );
			
			
		$setup->getConnection()
            ->addColumn(
                $setup->getTable($orderGridTable),
                $fieldName,
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
                    'default' => 0,
                    'comment' => $fieldTitle
                ]
            );
        $installer->endSetup();
    }
}