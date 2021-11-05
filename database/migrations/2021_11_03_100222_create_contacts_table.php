<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->unsigned()->bigInteger();
            $table->string('fullname',255)->nullable(false);
            $table->tinyInteger('gender')->unsigned()->nullable(false)->comment('性別 1:男, 2:女');
            $table->string('email',255)->nullable(false);
            $table->char('postcode',8)->nullable(false);
            $table->string('address',255)->nullable(false);
            $table->string('building_name',255);
            $table->text('opinion')->nullable(false);
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
