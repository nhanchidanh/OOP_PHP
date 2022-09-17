<?php
class ProductRepository extends BaseRepopsitory implements ProductRepositoryInterface {
    //Lay model tuong ung voi module product (lam viec voi table product trng database)
    public function getModel()
    {
        return "Product Model";
        // return new ProductModel();
    }

    public function getProduct(){
        return $this->getAll();
    }

    //Lay thong tin 1 sp co id =1 
    public function getDetailProduct($id) {
        return $this->find($id);
    }

    //Them sp
    public function addProduct($data)
    {
        return $this->create($data);
    }
}