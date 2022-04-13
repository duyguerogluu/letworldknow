<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('profile_id');
            $table->string('photo');
            //@todo konumları da buraya ekleyelim
            $table->enum('gender',['male','female','both']);
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
        Schema::dropIfExists('members');
    }
};
