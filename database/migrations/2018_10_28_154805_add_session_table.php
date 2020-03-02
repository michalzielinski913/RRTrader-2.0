<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sessions', function ($table) {
  $table->string('id')->unique();
  $table->unsignedInteger('user_id')->nullable();
  $table->string('ip_address', 45)->nullable();
  $table->text('user_agent')->nullable();
  $table->string('nick');
  $table->string('permission');
  $table->integer('last_activity');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
