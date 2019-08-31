<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAgentMadeRoles extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        $data = [
            [
                'id' => 38,
                'name' => 'agent-made-iain',
                'guard_name' => 'web'
            ],
            [
                'id' => 39,
                'name' => 'agent-made-lucia',
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
        $arrIDs = [38, 39];

        foreach ($arrIDs as $intID) {
            DB::table('roles')->delete($intID);
        }
    }
}
