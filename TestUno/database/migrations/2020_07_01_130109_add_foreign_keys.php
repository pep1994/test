<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('messages', function (Blueprint $table) {
          $table->foreign('apartment_id' , 'apartment_messages')
                ->references('id')
                ->on('apartments')
                ->onDelete('cascade');

      });

      Schema::table('stats', function (Blueprint $table) {
          $table->foreign('apartment_id' , 'apartment_stats')
                ->references('id')
                ->on('apartments')
                ->onDelete('cascade');

      });

      Schema::table('apartments', function (Blueprint $table) {
          $table->foreign('user_id' , 'user_apartments')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

      });

      Schema::table('apartment_reservation', function (Blueprint $table) {
          $table->foreign('apartment_id' , 'apartment_reservation')
                ->references('id')
                ->on('apartments')
                ->onDelete('cascade');
          $table->foreign('reservation_id' , 'reservation_apartment')
                ->references('id')
                ->on('reservations')
                ->onDelete('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::create('users', function (Blueprint $table) {
          $table-> dropForeign('user_apartments');
      });

      Schema::create('users', function (Blueprint $table) {
          $table-> dropForeign('apartment_stats');
      });

      Schema::create('apartment_reservation', function (Blueprint $table) {

          $table-> dropForeign('apartment_reservation');
          $table-> dropForeign('reservation_apartment');

      });
    }
}
