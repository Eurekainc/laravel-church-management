<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Title');
            $table->string('type');
            $table->date('date');
            $table->string('venue');
            $table->text('address');
            $table->string('preacher');
            $table->string('sermon_title');
            $table->string('bible_references');
            $table->string('sermon_notes');
            $table->string('attendees');
            $table->string('first_timers');
            $table->string('givings');
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
        Schema::dropIfExists('services');
    }
}
