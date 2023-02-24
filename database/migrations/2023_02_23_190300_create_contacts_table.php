<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname', 255)->nullable(false);
            $table->string('lastname', 255)->nullable(false);
            $table->string('fullname', 255)->nullable(false);
            $table->tinyInteger('gender')->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->char('postcode', 8)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('building_name', 255);
            $table->text('opinion')->nullable(false);
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
