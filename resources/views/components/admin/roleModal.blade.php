<div id="role{{ $objRole->id }}Modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">URLs for role: {{ $objRole->name }}</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <h4>Home page</h4>

                <pre class="url">{{ 'https://www.cee-realestate.com/?roles=' . $objRole->name }}</pre>

                <h4>Sign up</h4>

                <pre class="url">{{ 'https://www.cee-realestate.com/sign-up?roles=' . $objRole->name }}</pre>

                <hr class="part primary">

                <h4>Home page (SK)</h4>

                <pre class="url">{{ 'https://www.cee-realestate.com/sk?roles=' . $objRole->name }}</pre>

                <h4>Sign up (SK)</h4>

                <pre class="url">{{ 'https://www.cee-realestate.com/sign-up/sk?roles=' . $objRole->name }}</pre>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('general.close')</button>
            </div>
        </div>
    </div>
</div>