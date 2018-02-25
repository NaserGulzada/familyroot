<?php

namespace App\Repositories;

interface PostInterface
{
    function getAll();

    public function  getWithPaginate($nrec);

    function getById($id);

    function create(array $attributes);

    function update($id, array $attributes);

    function delete($id);
}