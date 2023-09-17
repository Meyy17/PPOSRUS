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
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default('$2y$10$V2aU7YzPu3RNBv5gdRc2xuRHuO0NhMqtzjse7VUZ.4e8qpvtt5VJ.');
            $table->rememberToken();
            $table->timestamps();
            $table->enum('role', ['user', 'admin'])->default('user');
            $table->integer('urut')->nullable();
            $table->integer('nis')->unique()->nullable();
            $table->string('nisn')->nullable();
            $table->text('name')->nullable();
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
