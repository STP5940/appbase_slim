<?php
/*
 * Model only for Appbase slim
 * @Makedate 05-07-2019
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Manager as DB;

class Users extends Model
{

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
      'level',
      'active'
    ];

    protected static function checklogin($username){
      $datause = DB::table('Users')
                        ->where('username', '=', $username)
                        ->orWhere('email', '=', $username)
                        ->first();
      return $datause;
    }

}
