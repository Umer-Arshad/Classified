<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('profile_image')->nullable();
            $table->unsignedBigInteger('user_role_id')->nullable();
            $table->foreign('user_role_id')->references('id')->on('user_roles')->onDelete('cascade')->nullOnDelete();
            $table->tinyInteger('status')->nullable();
            $table->longText('address1')->nullable();
            $table->longText('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->default(1);
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->softDeletes();
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
};
