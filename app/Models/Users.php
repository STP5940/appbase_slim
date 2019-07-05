<?php
/*
 * Model only for Appbase slim
 * @Makedate 05-07-2019
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

  protected $table = "Users";
  protected $fillable = ['id', 'email', 'password'];

}
