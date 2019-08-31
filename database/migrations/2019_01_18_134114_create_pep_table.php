<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePepTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pep', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('is_pep')->default('no');
            $table->string('type');
            $table->string('sanctioned')->default('no');
            $table->string('end_user')->default('no');
            $table->string('government_sector')->default('no');
            $table->string('government_sector_type')->nullable();
            $table->string('sectors')->default('no');
            $table->string('sector_type')->nullable();
            $table->string('businessman')->default('no');
            $table->string('investment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('pep');
    }
}
