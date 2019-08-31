<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Project;

class UpdateProject extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        $objProject = Project::find(1);

        $objProject->update([
            'id' => '1',
            'total_investment' => 900000,
            'cee_shares' => 70
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        $objProject = Project::find(1);

        $objProject->update([
            'id' => '1',
            'total_investment' => 1470000,
            'cee_shares' => 51
        ]);
    }
}
