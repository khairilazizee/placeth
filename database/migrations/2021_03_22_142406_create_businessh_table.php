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
            $table->string("biz_address1");
            $table->string("biz_address2");
            $table->string("biz_address3");
            $table->integer("postal");
            $table->string("phone1");
            $table->string("phone2");
            $table->string("email_address");
            $table->integer("oped_0");
            $table->integer("oped_1");
            $table->integer("oped_2");
            $table->integer("oped_3");
            $table->integer("oped_4");
            $table->integer("oped_5");
            $table->integer("oped_6");
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
