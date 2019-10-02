<?php


namespace App\Http\Repositories;


interface RepositoryInterface
{
    public function getAll();
    public function show($id);
    public function store($data);
    public function update($data);
    public function destroy($object);
}
