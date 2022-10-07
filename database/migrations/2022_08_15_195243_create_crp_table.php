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
        Schema::create('crp', function (Blueprint $table) {
                $table->id();
                $table->string('nombre_crp'); 
                $table->foreignid('users_id')-> constrained ('users')->CascadeonDelete();
                $table->foreignid('anioescolar_id')-> constrained ('anioescolar')->CascadeonDelete();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crp');
    }
};
