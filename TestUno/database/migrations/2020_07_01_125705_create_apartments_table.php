<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('room_number');
            $table->integer('bath_number');
            $table->integer('area');
            $table->string('address');
            $table->string('img');
            $table->boolean('wi_fi');
            $table->boolean('box_auto');
            $table->boolean('pool');
            $table->boolean('security');
            $table->boolean('sauna');
            $table->boolean('sea_view');
            $table->bigInteger('user_id')-> unsigned() -> index();



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
        Schema::dropIfExists('apartments');
    }
}
