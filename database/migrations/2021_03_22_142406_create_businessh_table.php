<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinesshTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businessh', function (Blueprint $table) {
            $table->id();
            $table->string("biz_name");
            $table->string("biz_address1");
            $table->string("biz_address2");
            $table->string("biz_address3");
            $table->int("postal");
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
        Schema::dropIfExists('businessh');
    }
}
