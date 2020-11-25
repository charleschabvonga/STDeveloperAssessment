<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface IResourceRepository
{

    /**
     * Find the model with its id
     *
     * @param Model $model
     * @param int $id
     * @return Model|null
     */
    public function find(Model $model, int $id): ?Model;

    /**
     * Returns a collection of model
     *
     * @param Model $model
     * @return Collection|null
     */
    public function all(Model $model): Collection;

    /**
     * Saves a model
     *
     * @param Model $model
     * @param array $attributes
     * @return Model|null
     */
    public function save(Model $model, array $attributes): ?Model;

    /**
     * Updates a model
     *
     * @param Model $resource
     * @param Model $model
     * @param array $attributes
     * @return Model|null
     */
    public function update(Model $resource, Model $model, array $attributes): ?Model;

    /**
     * Delete the model by the id provided
     *
     * @param Model $resource
     * @param Model $model
     * @return Model|null
     */
    public function delete(Model $resource, Model $model): ?bool;
}
