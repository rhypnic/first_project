<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToVotePertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vote_pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('vote_pertanyaan_id');

            $table->foreign('vote_pertanyaan_id')->references('id')->on('pertanyaan');
             $table->unsignedBigInteger('vote_profil_id');

            $table->foreign('vote_profil_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vote_pertanyaan', function (Blueprint $table) {
            $table->dropForeign('[vote_pertanyaan_id]');
            $table->dropColumn('[vote_pertanyaan_id]');
            $table->dropForeign('[vote_profil_id]');
            $table->dropColumn('[vote_profil_id]');
        });
    }
}
