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
            $table->integer("biz_type_id");
            $table->string("biz_name");
            $table->string("biz_address_0");
            $table->string("biz_address_1");
            $table->string("biz_address_2");
            $table->integer("postal");
            $table->string("phone_0");
            $table->string("phone_1");
            $table->string("email_address");
            $table->integer("oped_0"); // open day 1
            $table->integer("oped_1");
            $table->integer("oped_2");
            $table->integer("oped_3");
            $table->integer("oped_4");
            $table->integer("oped_5");
            $table->integer("oped_6");
            $table->time("opents_0"); // open time start 1
            $table->time("opents_1");
            $table->time("opents_2"); // open time start 3
            $table->time("opents_3"); // open time start 4
            $table->time("opents_4"); // open time start 5
            $table->time("opents_5"); // open time start 6
            $table->time("opents_6"); // open time start 7
            $table->time("opente_0"); // open time end 1
            $table->time("opente_1"); // open time end 2
            $table->time("opente_2"); // open time end 3
            $table->time("opente_3"); // open time end 4
            $table->time("opente_4");// open time end 5
            $table->time("opente_5"); // open time end 6
            $table->time("opente_6"); // open time end 7
            $table->string("owner_name");
            $table->string("biz_registration_no");
            $table->integer("halal");
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
