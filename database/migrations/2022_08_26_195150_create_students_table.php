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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->unique(); 
            $table->string('apellidos');
            $table->string('nombres');
            $table->string('lugarnac');
            $table->string('estadonac');
            $table->date('fechanac');
            $table->char('sexo');
            $table->foreignid('seccion_id')-> constrained ('seccions')->CascadeonDelete();
            $table->foreignid('crp_id')-> constrained ('crps')->CascadeonDelete();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};