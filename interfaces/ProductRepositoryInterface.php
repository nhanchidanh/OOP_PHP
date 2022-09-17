<?php
interface ProductRepositoryInterface{
    // public function getProducts();

    public function getDetailProduct($id);

    public function addProduct($data);
}