<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businessr', function (Blueprint $table) {
            $table->id();
            $table->foreignId("businessh_id")->constrained("businessh");
            $table->foreignId('people_id')->constrained('people');
            $table->text("review");
            $table->integer("status"); // 0 - reviewed, 1 - approved, 2 - reject, 3 - delete
            $table->string("reject_reason"); 
            $table->dateTime("created_date");
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
        Schema::dropIfExists('businessr');
    }
}
