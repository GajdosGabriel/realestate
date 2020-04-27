@if(App::getLocale() != 'sk')
    {{--En and Nl, De version with subtitles--}}
<div id="mixedModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('member/index.droneVideo')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div id="video" class="embed-responsive embed-responsive-16by9 d-print-none">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/WAHk8ci3LPM?autoplay=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    {{--<iframe width="560" height="315" src="https://www.youtube.com/embed/JWcCNjtq0Fc?autoplay=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('general.close')</button>
            </div>
        </div>
    </div>
</div>
    @else
    {{--Slovak version without subtitles--}}
    <div id="mixedModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('member/index.droneVideo')</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div id="video" class="embed-responsive embed-responsive-16by9 d-print-none">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/gyRb3VxtDvU?autoplay=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        {{--<iframe width="560" height="315" src="https://www.youtube.com/embed/JWcCNjtq0Fc?autoplay=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('general.close')</button>
                </div>
            </div>
        </div>
    </div>

@endif

@section('addJS')
    <script>
        var clone = $("#video").clone(true);

        $( "button" ).click(function() {
            $( "#video").detach();
        });

        $( "#mixedModal" ).click(function() {
            $(".modal-body").html(clone);
        });
    </script>
    @endsection
