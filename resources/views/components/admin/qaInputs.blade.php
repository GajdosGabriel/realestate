@foreach($arrAnswers as $objAnswer)
    @if($objAnswer != null)
        <div class="form-group">
            <label for="{{ $objAnswer->question->id }}">{{ $objAnswer->question->text }}</label>
            <textarea class="form-control" id="{{ $objAnswer->question->id }}" name="data[{{ $objAnswer->question->id }}]" rows="2" maxlength="300">{{ $objAnswer->text }}</textarea>

            @if ($errors->has('text'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
            @endif
        </div>
    @else
        <div class="form-group">
            <label for="{{ $loop->iteration }}">{{ $arrQuestions->get($loop->index)['text'] }}</label>
            <textarea class="form-control" id="{{ $loop->iteration }}" name="data[{{ $loop->iteration }}]" rows="2" maxlength="300"></textarea>

            @if ($errors->has('text'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
            @endif
        </div>
    @endif
@endforeach