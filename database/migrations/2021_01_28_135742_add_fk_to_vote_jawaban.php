<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToVoteJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vote_jawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('vote_jawaban_id');

            $table->foreign('vote_jawaban_id')->references('id')->on('jawaban');
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
        Schema::table('vote_jawaban', function (Blueprint $table) {
            $table->dropForeign('[vote_jawaban_id]');
            $table->dropColumn('[vote_jawaban_id]');
            $table->dropForeign('[vote_profil_id]');
            $table->dropColumn('[vote_profil_id]');
        });
    }
}
