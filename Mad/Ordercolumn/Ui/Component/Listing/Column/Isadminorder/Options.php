<?php
namespace Mad\Ordercolumn\Ui\Component\Listing\Column\Isadminorder;
use Magento\Framework\Data\OptionSourceInterface;
/**
 * Class Options
 */
class Options implements OptionSourceInterface
{
    /**
     * @var array
     */
    protected $options;

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {   
        $options = array(array('label' => __("Customer"), 'value' => 1), array('label' => __("Admin"), 'value' => 0));
        $this->options = $options;

        return $this->options;
    }
}
