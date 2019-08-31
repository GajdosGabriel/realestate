<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUsersForeignKeys extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('fk_user-referral');

            $table->foreign('referral_id', 'fk_user-referral')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('fk_user-referral');

            $table->foreign('referral_id', 'fk_user-referral')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }
}
