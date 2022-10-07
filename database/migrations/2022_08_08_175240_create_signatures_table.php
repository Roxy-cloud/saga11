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
               Schema::create('signatures', function (Blueprint $table) {
                $table->id();
                $table->string('nombre',100); 
                $table->text('abreviatura',3);
                $table->foreignid('seccion_id')-> constrained ('seccions')->CascadeonDelete();
                $table->foreignid('user_id')-> constrained ('users')->CascadeonDelete();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
    
        ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signatures');
    }
};
