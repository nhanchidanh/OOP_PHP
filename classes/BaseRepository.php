<?php
abstract class BaseRepopsitory implements RepositoryInterface{
    protected $model;

    //Khoi tao
    public function __construct()
    {
        $this->setModel();
    }

    //Lay model tuong ung
    abstract public function getModel();

    //setModel
    public function setModel(){
        $this->model = $this->getModel();
    }

    public function getAll(){
        return "get all";
    }

    public function find($id)
    {
        return "get one";
    }

    public function create($attributes = [])
    {
        return "Create record";
    }

    public function update($id, $attributes = [])
    {
        return "Update record";
    }

    public function delete($id)
    {
        return "delete record";
    }
} 