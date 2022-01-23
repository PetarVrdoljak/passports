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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('surname',50);
            $table->date('date_of_birth')->nullable();
            $table->string('gender',10)->nullable();
            $table->foreignId('place_id')
                ->nullable()
                ->constrained('places')
                ->onDelete('set null');
            $table->foreignId('passport_id')
                ->nullable()
                ->constrained('passports')
                ->onDelete('set null');
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
