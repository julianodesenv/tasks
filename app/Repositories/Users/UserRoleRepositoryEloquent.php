<?php

namespace App\Repositories\Users;

use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Users\UserRoleRepository;
use App\Models\User\UserRole;
use App\Validators\Users\UserRoleValidator;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class UserRoleRepositoryEloquent.
 *
 * @package namespace App\Repositories\Users;
 */
class UserRoleRepositoryEloquent extends BaseRepository implements UserRoleRepository, CacheableInterface
{
    use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserRole::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return UserRoleValidator::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
