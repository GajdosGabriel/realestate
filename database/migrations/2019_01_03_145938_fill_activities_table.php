<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillActivitiesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        $data = [
            [
                'id' => 1,
                'name' => 'Log in',
            ],
            [
                'id' => 2,
                'name' => 'Log out',
            ],
            [
                'id' => 3,
                'name' => 'Member homepage',
            ],
            [
                'id' => 4,
                'name' => 'Partner program',
            ],
            [
                'id' => 10,
                'name' => 'Account settings',
            ],
            [
                'id' => 20,
                'name' => 'News room',
            ],
            [
                'id' => 21,
                'name' => 'Realizes projects / Recreational new development project',
            ],
            [
                'id' => 31,
                'name' => 'Realizes projects',
            ],
            [
                'id' => 32,
                'name' => 'Member area contact page',
            ],
            [
                'id' => 33,
                'name' => 'Marketing materials',
            ],
            [
                'id' => 34,
                'name' => 'Your sign ups',
            ],
            [
                'id' => 35,
                'name' => 'HTML banners',
            ],
            [
                'id' => 36,
                'name' => 'Facebook banners',
            ],
            [
                'id' => 37,
                'name' => 'Realized projects / Renovation project house 1',
            ],
            [
                'id' => 39,
                'name' => 'Realized projects / Renovation project house 3',
            ],
            [
                'id' => 42,
                'name' => 'Realized projects / Renovation project house 2',
            ],
            [
                'id' => 46,
                'name' => 'Projects / First-line lake development project',
            ],
            [
                'id' => 48,
                'name' => 'Projects / Short term renovation projects',
            ],
            [
                'id' => 49,
                'name' => 'My investments',
            ],
            [
                'id' => 50,
                'name' => 'Projects / City center renovation project',
            ],
            [
                'id' => 51,
                'name' => 'Invest / STEP 1',
            ],
            [
                'id' => 52,
                'name' => 'Invest / STEP 2',
            ],
            [
                'id' => 53,
                'name' => 'Invest / STEP 3',
            ],
            [
                'id' => 54,
                'name' => 'Projects / Wellness Resort renovation project',
            ],
            [
                'id' => 55,
                'name' => 'Projects',
            ],
            [
                'id' => 56,
                'name' => 'Why invest in Šírava park',
            ],
            [
                'id' => 57,
                'name' => 'Master plan land use',
            ],
            [
                'id' => 58,
                'name' => 'Location',
            ],
            [
                'id' => 59,
                'name' => 'Investor info & news',
            ],
            [
                'id' => 60,
                'name' => 'How to invest',
            ],
            [
                'id' => 61,
                'name' => 'Public website',
            ],
            [
                'id' => 62,
                'name' => 'Business plan',
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
        $arrIDs = [1, 2, 3, 10, 20, 21, 31, 32, 33, 34, 35, 36, 37, 39, 42, 46, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62];

        foreach ($arrIDs as $intID) {
            DB::table('activities')->delete($intID);
        }
    }
}
