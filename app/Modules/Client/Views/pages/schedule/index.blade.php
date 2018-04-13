@extends("Client::layouts.default")

@section('meta')
    <meta name="keywords" content="ILA Anh Văn Hè 2018, Tiếng Anh Hè 2018, Anh Văn Hè, Trại hè tiếng Anh đẳng cấp quốc tế">
    <meta name="description" content="Chương trình anh văn hè ILA 2018 - Trại hè tiếng Anh đẳng cấp quốc tế lần đầu tiên xuất hiện tại Việt Nam dành cho học viên từ 4-16 tuổi.">
    <meta property="og:image" content="{!! asset('public/assets/frontend/images/fb/fb-share-S.jpg') !!}" />
@stop

@section('title', 'Chương trình Anh Văn Hè 2018')

@section("content")
    <section class="schedule">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="schedule-wrapper">
                        <div class="filter">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="form-filter-wrapper">
                                            <h4 class="title">Lịch Học</h4>
                                            <p>Để biết lịch học, vui lòng chọn khoá học, thành phố bạn đang sống và trung tâm bạn muốn học</p>
                                            <div class="form">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            {!! Form::select('program_id',[''=> 'Vui lòng chọn chương trình học'] + $program, old('program_id'), ['class' => 'form-control', 'required']) !!}
                                                        </div>
                                                        <div class="col-md-4">
                                                            {!! Form::select('city_id',[''=> 'Vui lòng chọn Thành Phố'] + $city, old('city_id'), ['class' => 'form-control', 'required']) !!}
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="wrap-center">
                                                                {!! Form::select('center_id',[''=> 'Vui lòng chọn Trung tâm'] + $city, old('city_id'), ['class' => 'form-control', 'disabled']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="text-center btn-container">
                                                                <button type="button" class="btn-search">Xem Lịch Học</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end filter -->

                        <div class="form-container">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="form-content"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include("Client::layouts.why")

    @include("Client::layouts.partner")
@stop

@section("script")
    <!--SLICK-->
    <link rel="stylesheet" href="{!! asset('public/assets/frontend/js/slick')!!}/slick.css">
    <script src="{!! asset('public/assets/frontend/js/slick')!!}/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            /*SLICK*/
            $('.slider-partner').slick({
                slidesToShow: 5,
                slidesToScroll: 1
            })

            $(document).on('change','select[name=city_id]', function(){
                var city_id = $(this).val();
                $.ajax({
                    url: '{!! route("schedule.center") !!}',
                    type: 'POST',
                    data: {city_id: city_id, _token: $('meta[name=csrf-token]').attr('content')},
                    success: function(result){
                        $('.wrap-center').html(result.data);
                    }
                })
            })

            $(document).on('click', '.btn-search', function(){
                var program_id = $('select[name=program_id]').val();
                var center_id = $('select[name=center_id]').val();
                $.ajax({
                    url: '{!! route("schedule.filter") !!}',
                    type: "POST",
                    data: {program_id: program_id, center_id: center_id, _token: $('meta[name=csrf-token]').attr('content') },
                    success: function(result){
                        if(result.error){
                            $('.form-filter-wrapper').append('<div style="padding: 0 15px"><div class="alert-form alert alert-danger">Vui lòng chọn đầy đủ thông tin.</div></div>')
                            setTimeout(function () {
                                    $('.alert-form').fadeOut();
                                }, 4000
                            )
                        }else{
                            $('.form-content').html(result.data);
                        }
                    }
                })
            })
        })
    </script>
@stop