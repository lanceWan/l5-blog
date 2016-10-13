<?php
namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role as SpatieRole;
class Role extends SpatieRole
{
    use SoftDeletes;

    public $table = 'roles';


    protected $dates = ['deleted_at'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public $fillable = [
        'name',
        'description'
    ];
}
