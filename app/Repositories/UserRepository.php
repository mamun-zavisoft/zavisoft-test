<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{
    public function all(): Collection
    {
        return User::all();
    }

    public function find($id): Collection|User
    {
        return User::findOrFail($id);
    }

    public function create(array $data): User
    {
        return User::create($data);
    }

    public function update($id, array $data): Collection|User
    {
        $User = User::findOrFail($id);
        $User->update($data);
        return $User;
    }

    public function delete($id): int
    {
        return User::destroy($id);
    }
}
