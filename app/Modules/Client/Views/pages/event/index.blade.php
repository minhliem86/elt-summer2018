@extends('Client::layouts.default')

@section("content")
    @include("Client::layouts.banner_general")

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
            $('.banner-homepage .tp-banner').revolution({
                delay:5000,
                startwidth:1920,
                startheight:700,
                hideThumbs:10,
                navigationType:'none'
            })

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