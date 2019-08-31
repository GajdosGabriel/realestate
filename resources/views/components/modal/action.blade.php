<div id="{{ $identification }}" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $header }}</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <h4 class="xs-mb-20 text-center">{{ $bodyTitle }}</h4>
                <p>{{ $bodyText }}</p>
            </div>

            <div class="modal-footer d-none d-lg-flex">
                <button type="button" data-dismiss="modal" aria-label="Close"  class="btn btn-secondary">Cancel</button>
                <a href="{{ route('admin.orders.delete', [$actionLink]) }}" class="btn btn-primary">Send</a>
            </div>
        </div>
    </div>
</div>