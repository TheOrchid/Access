<?php namespace Orchid\Access\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Access\Traits\RoleAccess;

class Roles extends Model
{

    use RoleAccess;

    protected static $usersModel = User::class;

    protected $table = 'roles';

    protected $fillable = [
        'id',
        'name',
        'slug',
        'permissions',
    ];

}
