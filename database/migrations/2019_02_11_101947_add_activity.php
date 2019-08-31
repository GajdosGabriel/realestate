<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActivity extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        $data = [
            [
                'id' => 63,
                'name' => 'Marina & Beach club master plan'
            ]
        ];

        DB::table('activities')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        $arrIDs = [63];

        foreach ($arrIDs as $intID) {
            DB::table('activities')->delete($intID);
        }
    }
}
