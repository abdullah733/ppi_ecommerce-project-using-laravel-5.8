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
            $table->string('name',128);
            $table->longText('address')->nullable();
            $table->string('email',128)->unique();
            $table->string('phone_number',20)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',96);
            $table->string('role')->default('user');
            $table->tinyInteger('active')->default('1');
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
