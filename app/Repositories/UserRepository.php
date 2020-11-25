<?php

namespace App\Repositories;

use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserRepository implements IRepository
{
    /**
     * Get all user.
     *
     * @return User[]|Collection $user
     */
    public function all(): Collection
    {
        $users = User::all();
        return $users;
    }

    /**
     * Save User
     *
     * @param $data
     * @return User
     */
    public function save(array $data): ?Model
    {
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile'],
            'name' => $data['name'],
            'surname' => $data['surname'],
            'job_title' => $data['job_title'],
            'bio' => $data['bio'],
        ]);

        return $user->refresh();
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
        $user->update([
            'username' => $data['username'],
            'mobile' => $data['mobile'],
            'name' => $data['name'],
            'surname' => $data['surname'],
            'job_title' => $data['job_title'],
            'bio' => $data['bio'],
        ]);

        return $user->refresh();
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
