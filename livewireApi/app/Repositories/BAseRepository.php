<?php

namespace App\Repositories;


interface BaseRepository{
    public function create($data);
    public function update($model,$data);
    public function delete($model);
    public function find($id);
    public function saveImage($file,$path);
    public function all();
}