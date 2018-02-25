<?php

namespace App\Repositories;

use App\Post;

class PostRepository implements PostInterface
{
    /**
     * @var $model
     */
    private $model;

    /**
     * EloquentTask constructor.
     *
     * @param App\Post $model
     */
    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    /**
     * Get all tasks.
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->model->all();
    }
    /**
    *  Get number of records with pagination (limit)s
     * @param: nrec (number of records)
     */
    public function  getWithPaginate($nrec = 5)
    {
        return $this->model->orderBy('created_at','desc')->paginate($nrec);
    }

    /**
     * Get task by id.
     *
     * @param integer $id
     *
     * @return App\Post
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    /**
     * Create a new task.
     *
     * @param array $attributes
     *
     * @return App\Post
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * Update a task.
     *
     * @param integer $id
     * @param array $attributes
     *
     * @return App\Post
     */
    public function update($id, array $attributes)
    {
        return $this->model->find($id)->update($attributes);
    }

    /**
     * Delete a task.
     *
     * @param integer $id
     *
     * @return boolean
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}