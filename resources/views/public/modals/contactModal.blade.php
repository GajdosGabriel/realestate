<div id="contactModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('general.contactUs')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                @include('includes/errorList')

                <form id="contactForm" class="cee" method="POST" action="{{ route('public.contact') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="contactName" class="col-md-4 col-form-label text-md-right">@lang('form.name')</label>

                        <div class="col-md-6">
                            <input id="contactName" type="text" class="form-control{{ $errors->has('contactName') ? ' is-invalid' : '' }}" name="contactName" value="{{ old('contactName') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contactSurname" class="col-md-4 col-form-label text-md-right">@lang('form.surname')</label>

                        <div class="col-md-6">
                            <input id="contactSurname" type="text" class="form-control{{ $errors->has('contactSurname') ? ' is-invalid' : '' }}" name="contactSurname" value="{{ old('contactSurname') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contactEmail" class="col-md-4 col-form-label text-md-right">@lang('form.email')</label>

                        <div class="col-md-6">
                            <input id="contactEmail" type="email" class="form-control{{ $errors->has('contactEmail') ? ' is-invalid' : '' }}" name="contactEmail" value="{{ old('contactEmail') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contactPhone" class="col-md-4 col-form-label text-md-right">@lang('form.phone')</label>

                        <div class="col-md-6">
                            <div class="input-group">
                                <select class="form-control" name="contactPhoneCode" required>
                                    <option value="">@lang('form.countryCode')</option>
                                    {!! App\Classes\Country::phoneCodes(old('contactPhoneCode')) !!}
                                </select>

                                <div class="input-group-append">
                                    <input id="contactPhone" type="text" class="form-control{{ $errors->has('contactPhone') ? ' is-invalid' : '' }}" name="contactPhone" value="{{ old('contactPhone') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">@lang('form.message')</label>

                        <div class="col-md-6">
                            <textarea id="text" name="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" rows="4" required minlength="20" maxlength="500">{{ old('text') }}</textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="g-recaptcha d-inline-block" data-sitekey="6LfpgoEUAAAAAKbNCgxHMzexl3tFN6RXYEBlsvsv"></div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('general.close')</button>

                <button type="submit" form="contactForm" class="btn btn-primary">@lang('form.send')</button>
            </div>
        </div>
    </div>
</div>