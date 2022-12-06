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
        Schema::create('t_chos', function (Blueprint $table) {
            $table->id();
            $table->text('cho_uid');
            $table->decimal('cho_gramos');
            $table->decimal('cho_kcal');
            $table->decimal('cho_%');
            $table->decimal('cho_g_kg');
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
        Schema::dropIfExists('t_chos');
    }
};
