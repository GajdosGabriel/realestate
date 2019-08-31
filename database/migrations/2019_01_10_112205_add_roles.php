<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoles extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        $data = [
            [
                'id' => 36,
                'name' => 'signup-sk',
                'guard_name' => 'web'
            ],
            [
                'id' => 37,
                'name' => 'lp-google-sk',
                'guard_name' => 'web'
            ]
        ];

        DB::table('roles')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        $arrIDs = [36, 37];

        foreach ($arrIDs as $intID) {
            DB::table('roles')->delete($intID);
        }
    }
}