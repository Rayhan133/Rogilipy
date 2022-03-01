<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('patient');
            $table->rememberToken();
            $table->timestamps();
        });

        $user = User::create([
            'name'                => 'Admin',
            'phone'               => "01923988380",
            'email'               => 'admin@gmail.com',
            'address'             => 'Dhaka',
            'password'            => 'Password',
            'role'                => 'admin',
        ]);
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
