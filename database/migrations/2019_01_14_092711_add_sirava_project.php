<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSiravaProject extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        $data = [
            [
                'id' => 1,
                'name' => 'Šírava Park',
                'img' => '/images/member/hot/flldp/siravaProject.jpg',
                'location' => 'Zemplínska Šírava, Slovak Republic',
                'roi' => '35-65',
                'url' => '/member/projects/first-line-lake-development-project',
                'total_investment' => 1470000,
                'cee_shares' => 51,
                'per_share' => 30000,
            ]
        ];

        DB::table('projects')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        $arrIDs = [1];

        foreach ($arrIDs as $intID) {
            DB::table('projects')->delete($intID);
        }
    }
}