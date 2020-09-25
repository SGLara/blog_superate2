<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'users',
            function (Blueprint $table) {
                $table->id();
                $table->string('first_name', 25)->index();
                $table->string('last_name', 25)->index();
                $table->string('email', 30)->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->boolean('is_admin')->default(0);
                $table->unsignedBigInteger('superate_center_id')->nullable()->index();
                $table->date('birthdate')->nullable();
                $table->char('phone', 15)->nullable()->index();
                $table->enum('gender', ['m', 'f'])->nullable();
                $table->rememberToken();
                $table->timestamps();
            }
        );
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
