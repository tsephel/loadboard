<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->bigInteger('type_id')->unsigned()->index()->nullable();
            $table->string('ref')->nullable()->unique();
            $table->string('contact');
            $table->string('origin');
            $table->string('destination');
            $table->string('dock')->nullable();       
            $table->decimal('length');
            $table->decimal('weight');
            $table->integer('full')->default(0);
            $table->date('startDate');
            $table->decimal('offer')->nullable();
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
        Schema::dropIfExists('loads');
    }
}
