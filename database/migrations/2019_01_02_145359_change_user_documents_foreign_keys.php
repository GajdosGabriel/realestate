<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUserDocumentsForeignKeys extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('user_documents', function (Blueprint $table) {
            $table->dropForeign('fk_user_document-document');
            $table->dropForeign('fk_user_document-user');

            $table->foreign('document_id', 'fk_user_document-document')->references('id')->on('documents')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('user_id', 'fk_user_document-user')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('user_documents', function (Blueprint $table) {
            $table->dropForeign('fk_user_document-document');
            $table->dropForeign('fk_user_document-user');

            $table->foreign('document_id', 'fk_user_document-document')->references('id')->on('documents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('user_id', 'fk_user_document-user')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }
}
