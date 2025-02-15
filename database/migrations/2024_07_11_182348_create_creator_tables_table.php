<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatorTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creator_tables', function (Blueprint $table) {
            $table->bigIncrements("creator_id");
            $table->string("creator_name");
            $table->string("creator_email");
            $table->string("social_links");
            $table->string("description");
            $table->string("avatar");

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
        Schema::dropIfExists('creator_tables');
    }
}
