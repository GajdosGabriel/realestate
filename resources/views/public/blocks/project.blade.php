<div id="projectBlock" class="container pageBlock xs-pb-20 lg-pb-50">
    <h6 class="header-sm color_primary font-weight-bold xs-mb-20 lg-mb-50 text-center">@lang('general.welcome')</h6>

    <div class="row xs-mb-20 lg-mb-50">
        <div class="col-12 col-md-4">
            <h4 class="text-center">@lang('public/project.1')</h4>

            <img src="{{ asset('images/pub/project/1.jpg') }}" class="img-fluid d-block img-thumbnail xs-mb-20" data-aos="zoom-in" alt="">

            <div class="text-center xs-mb-20">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">@lang('general.more')</a>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <h4 class="text-center">@lang('public/project.2')</h4>

            <img src="{{ asset('images/pub/project/2.jpg') }}" class="img-fluid d-block img-thumbnail xs-mb-20" data-aos="zoom-in" alt="">

            <div class="text-center xs-mb-20">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">@lang('general.more')</a>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <h4 class="text-center">@lang('public/project.3')</h4>

            <img src="{{ asset('images/pub/project/3.jpg') }}" class="img-fluid d-block img-thumbnail xs-mb-20" data-aos="zoom-in" alt="">

            <div class="text-center">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">@lang('general.more')</a>
            </div>
        </div>
    </div>

    @include('includes/videos/mixed')
</div>