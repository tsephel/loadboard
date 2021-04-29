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
            $table->integer('user_id')->unsigned()->index();
            $table->integer('truckType_id')->unsigned()->index();
            $table->string('ref');
            $table->string('contact');
            $table->string('origin');
            $table->integer('dh_o')->default(0);
            $table->string('destination');
            $table->integer('dh_d')->default(0);
            $table->decimal('length');
            $table->decimal('weight');
            $table->integer('full')->default(0);
            $table->date('startDate');
            $table->date('endDate');
            $table->text('comments');
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
        Schema::dropIfExists('trucks');
    }
}
