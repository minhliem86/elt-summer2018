@extends('Client::layouts.default')

@section("meta")
    <meta name="keywords" content="ILA Anh Văn Hè 2018, Tiếng Anh Hè 2018, Anh Văn Hè, Trại hè tiếng Anh đẳng cấp quốc tế">
    <meta name="description" content="Chương trình anh văn hè ILA 2018 - Trại hè tiếng Anh đẳng cấp quốc tế lần đầu tiên xuất hiện tại Việt Nam dành cho học viên từ 4-16 tuổi.">
    <meta property="og:image" content="{!! asset('public/assets/frontend/images/fb/fb-share-S.jpg') !!}" />
@stop

@section('title', 'Chương trình Anh Văn Hè 2018 - Sự Kiện')


@section("content")
    @include("Client::layouts.banner-donkey")

    <section class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-event">
                        <h2>SỰ KIỆN TẠI ILA</h2>
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="loadModal"></div>
@stop

@section("script")
    <link rel="stylesheet" href="{!! asset('public/assets/frontend/js/fullcalendar/fullcalendar.min.css') !!}">
    <script src="{!! asset('public/assets/frontend/js/fullcalendar/moment.min.js') !!}"></script>
    <script src="{!! asset('public/assets/frontend/js/fullcalendar/fullcalendar.min.js') !!}"></script>

    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#calendar').fullCalendar({
                header: {
                    center: 'month,list' // buttons for switching between views
                },
                showNonCurrentDates:false,
                timeFormat: 'H:mm',
                events: [
                    @if(!$list_event->isEmpty())
                        @foreach($list_event as $item_event)
                    {
                        id: '{!! $item_event->id !!}',
                        title: '{!! $item_event->title !!}',
                        start: '{!! $item_event->start !!}',
                        end: '{!! $item_event->end !!}',
                    }
                    @endforeach
                    @endif
                ],
                eventLimit: true,
                eventClick: function(calEvent, jsEvent, view){
//                    console.log(calEvent.source.uid);
                    $.ajax({
                        url: "{!! route('event.ajax') !!}",
                        type: 'POST',
                        data: {id: calEvent.source.uid },
                        success: function (rs) {
                            $('#loadModal').html(rs.data);
                            $('.modal').modal('show')
                        }
                    })
                }

            })
        })
    </script>
@stop