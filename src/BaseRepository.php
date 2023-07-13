<?php

namespace TZS\LaravelRepositoryGenerator;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    /**
     * BaseRepository constructor.
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function paginate($size = 10): LengthAwarePaginator
    {
        return $this->model->paginate($size);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function find(int $id, array $with = [], array $params = []): ?Model
    {
        return $this->model->with($with)->findOrFail($id);
    }

    public function findWithTrash(int $id): ?Model
    {
        return $this->model::query()->withTrashed()->find($id);
    }

    public function delete(int $id)
    {
        return $this->model::query()->find($id)->delete();
    }

    public function update(int $id, array $attributes): bool
    {
        $model = $this->find($id);

        return $model->update($attributes);
    }
}
