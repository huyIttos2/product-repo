<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\ProductInterface;
use App\Http\Repositories\RepositoryInterface;

abstract class ProductEloquent implements RepositoryInterface
{
    protected $model;
    public function __construct()
    {
        $this->setModel();
    }
    abstract public function getModel();
    public function  setModel(){
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }

    public function show($id)
    {
        $result = $this->model->find($id);
        return $result;
    }

    public function store($data)
    {
        return $data->save();
    }

    public function update($data)
    {
        return $data->save();
    }

    public function destroy($object)
    {
        $object->delete();
    }
}
