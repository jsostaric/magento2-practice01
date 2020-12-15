<?php

namespace Inchoo\Helloworld\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Template;

class Hello extends \Magento\Framework\View\Element\Template
{
    protected $scopeConfig;

    public function __construct(Template\Context $context, array $data = [], ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    /**
     * @return bool
     */
    public function isVisible(): bool
    {
        return $this->scopeConfig->getValue('helloworld/general/enable');
    }
    
    /**
     * @return string
     */
    public function getHelloWorld()
    {
        return 'Hello World :]';
    }
}
