<?php
/*
 * Model only for Appbase slim
 * @Makedate 05-07-2019
 */
namespace App\Migration;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

  /**
   * Run the migrations.
   *
   * @return void
   */
    public function up()
    {
      Schema::Create('Users', function(Blueprint $table){
        $table->increments('id');
        $table->string('name', 50);
        $table->string('lastname', 50);
        $table->string('username', 50);
        $table->string('password', 100);
        $table->string('email', 50);
        $table->integer('level');
        $table->integer('active');
        $table->timestamps();
        $table->softDeletes();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('Users');
    }

}

$obj = new CreateUsersTable();
$obj->up();
