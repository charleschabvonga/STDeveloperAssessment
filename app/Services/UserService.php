<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserService implements IService
{
    /**
     * @var UserRepository $userRepository
     */
    private $userRepository;

    /**
     * UserService constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Get all users.
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->userRepository->all();
    }

    /**
     * Validate user data.
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return Model|null
     */
    public function save(array $data): ?Model
    {
        return $this->userRepository->save($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find(int $id): ?Model
    {
        //
    }

    /**
     * @param Model $user
     * @param array $data
     * @return mixed
     */
    public function update(Model $user, array $data): ?Model
    {
        return $this->userRepository->update($user, $data);
    }

    /**
     * @param Model $user
     * @return mixed
     * @throws Exception
     */
    public function delete(Model $user): ?bool
    {
        //
    }
}
