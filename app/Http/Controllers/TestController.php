<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function importDb() {
        $data = file_get_contents(database_path('migrations/db/import.csv'));
        $rows = explode(",", trim($data));

        dd($rows);
//
//        collect($rows)
//            ->map(function ($row) {
//                list($id, $name, $vocative, $count, $gender) = explode("\t", $row);
//                return compact('id', 'name', 'vocative', 'count', 'gender');
//            })
//            ->chunk(1000)
//            ->each(function ($chunk) {
//                \DB::table('first_names')->insert($chunk->toArray());
//            });

    }
}
