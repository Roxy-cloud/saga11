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
        Schema::create('crpcalif', function (Blueprint $table) {
            $table->id();
            $table->double('momento1',2,2)->nullable();
            $table->double('momento2',2,2)->nullable();
            $table->double('momento3',2,2)->nullable();
            $table->double('definitiva',2)->nullable();
            $table->foreignid('student_id')-> constrained ('student')->CascadeonDelete();
            $table->foreignid('crp_id')-> constrained ('crp')->CascadeonDelete();
            $table->foreignid('user_id')-> constrained ('users')->CascadeonDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crpcalif');
    }
};
