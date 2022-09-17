<?php
interface RepositoryInterface {
    public function getAll();

    //Lay 1 ban ghi
    public function find($id);

    // Tao moi 1 ban ghi
    public function create($attributes = []);

    //Cap nhat 1 ban ghi
    public function update($id, $attributes = []);

    //xoa 1 ban ghi
    public function delete($id);
}