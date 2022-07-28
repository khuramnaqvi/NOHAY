<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNohaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nohays', function (Blueprint $table) {
            $table->id();
            $table->text('url')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('tittle')->nullable();
            $table->text('year')->nullable();

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
        Schema::dropIfExists('nohays');
    }
}
