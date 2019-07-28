<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComiteeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comitee_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('comitee_id')->references('id')->on('comitees');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('status')->nullable()->comment('spcify_what_is_the_current_status');
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
        Schema::dropIfExists('comitee_users');
    }
}
