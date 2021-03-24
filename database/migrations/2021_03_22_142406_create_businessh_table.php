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
            $table->integer("biz_type_id")->default(3);
            $table->string("biz_name");
            $table->string("biz_address1");
            $table->string("biz_address2");
            $table->string("biz_address3");
            $table->integer("postal");
            $table->string("phone1");
            $table->string("phone2");
            $table->string("email_address");
            $table->string("0");
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
