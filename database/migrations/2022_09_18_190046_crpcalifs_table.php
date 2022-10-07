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
        Schema::create('crpcalifs', function (Blueprint $table) {
            $table->id();
            $table->double('momento1',2,2)->nullable();
            $table->double('momento2',2,2)->nullable();
            $table->double('momento3',2,2)->nullable();
            $table->double('definitiva',2)->nullable();
            $table->foreignid('student_id')-> constrained ('students')->CascadeonDelete();
            $table->foreignid('crp_id')-> constrained ('crps')->CascadeonDelete();
            $table->foreignid('user_id')-> constrained ('users')->CascadeonDelete();
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
        Schema::dropIfExists('crpcalifs');
    }
};
