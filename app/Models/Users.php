<?php
/*
 * Model only for Appbase slim
 * @Makedate 05-07-2019
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{

    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $table = "Users";
    protected $primaryKey = "id";
    protected $guarded = ['active'];
    protected $fillable = [
      'id',
      'name',
      'lastname',
      'username',
      'password',
      'email',
      'img',
      'level',
      'active'
    ];

    protected static function checklogin($username){

      return Users::where('username', '=', $username)
                        ->orWhere('email', '=', $username)
                        ->first();
    }

}
