<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->bigInteger('type_id')->unsigned()->index()->nullable();
            $table->string('ref')->nullable();
            $table->string('contact');
            $table->string('origin');
            $table->integer('dh_o')->default(0)->nullable();
            $table->string('destination');
            $table->integer('dh_d')->default(0)->nullable();
            $table->decimal('length');
            $table->decimal('weight');
            $table->integer('full')->default(0);
            $table->date('startDate');
            $table->date('endDate');
            $table->text('comments')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trucks');
    }
}
