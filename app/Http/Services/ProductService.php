<?php


namespace App\Http\Services;


interface ProductService
{
    public  function  getAll();
    public  function  show($id);
    public  function  store($request);
    public  function  update($request, $id);
    public  function  destroy($id);
}
