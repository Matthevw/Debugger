<?php

namespace M2M\Debugger\Controller\Adminhtml\Debugger;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use M2M\CollectionsExercise\Model\Product\Product;
use M2M\Logger\Logger\Logger;
use M2M\CollectionsExercise\Model\Category\Category;

//Dependency Injection - wstrzykiwanie zależności innej klasy 

class Debug extends Action
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @var Product
     */
    protected $productCollection;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var Category
     */
    protected $category;


    public function __construct(
        Product $productCollection,
        Context $context,
        Logger $logger,
        Category $category,

    ) {
        $this->productCollection = $productCollection;
        parent::__construct($context);
        $this->logger = $logger;

    }

    public function execute()
    {
        // $this->productCollection->getProductCollection();
        // $this->productCollection->getProductCollectionBySku('Klawiatura');
        // var_dump('wszystko dziala');
        // $this->logger->info('Test czy logger działa, pozdrawiam');
        $this->logger->info('test loggera', [], $this);
        // $this->category->getCategoriesCollection();
    }
}