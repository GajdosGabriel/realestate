<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Answer;
use Illuminate\Http\Request;

class AnswersPostController extends Controller {
    public function save(Request $objRequest) {
        $arrRequest = $objRequest->all();

        // Update existing
        $arrAnswers = Answer::where([
            'user_id' => $objRequest->user_id
        ])->get();

        foreach ($arrAnswers as $objAnswer) {
            $objAnswer->text = $objRequest->data[$objAnswer->question_id];
            $objAnswer->save();
            unset($arrRequest['data'][$objAnswer->question_id]);
        }

        // Save new
        foreach ($arrRequest['data'] as $key => $value) {
            Answer::create([
                'user_id' => $arrRequest['user_id'],
                'question_id' => $key,
                'text' => $value
            ]);
        }

        return back();
    }
}
