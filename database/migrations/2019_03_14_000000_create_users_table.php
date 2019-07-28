<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('email');
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('designation')->nullable();
            $table->integer('role_type_id');
            $table->string('about');
            $table->string('department_name');
            $table->integer('batch_id');
            $table->integer('alumniStatus');
            $table->integer('session_id');
            $table->boolean('verified')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
