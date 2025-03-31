<?php

require_once "repositories\ProductRepository.php";
require_once "repositories\interface\IProductRepository.php";

class ProductController {
    private IProductRepository $productRepository;

    public function __construct() {
        $this->productRepository = new ProductRepository();
    }

    public function GetAllProduct() 
    {
        echo json_encode($this->productRepository->GetAllProduct());
        // Return All ProductId, ProductName, ProductPrice, ProductDate and its Prices
    }

    public function GetLatestPriceOfTheProduct() 
    {
        echo json_encode($this->productRepository->GetLatestPriceOfTheProduct());
        // Return Products with Latest Price
    }

    public function GetProductById($productId) 
    {
        echo json_encode($this->productRepository->GetProductById($productId));
    }

}