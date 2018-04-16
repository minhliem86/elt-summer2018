<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Mã Số Lớp</th>
            <th class="text-center">Tổng Số Tuần</th>
            <th>Ngày Học</th>
            <th class="text-center">Thời Gian</th>
            <th class="text-center">Ngày Khai Giảng</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($schedule))
            @foreach($schedule as $item)
                <tr>
                    <td data="Mã Số Lớp">{!! $item->class_code !!}</td>
                    <td data="Tổng Số Tuần" class="text-center">{!! $item->weeks !!}</td>
                    <td data="Ngày Học">{!! $item->days !!}</td>
                    <td data="Thời Gian" class="text-center">{!! $item->class_time_from !!} - {!! $item->class_time_to !!}</td>
                    <td data="Ngày Khai Giảng" class="text-center">{!! \Carbon\Carbon::createFromFormat('Y-m-d', $item->start_date)->format('d/m/Y') !!}</td>
                    <td ><a href="{!! route('register') !!}" class="dk">Đăng ký</a></td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6" class="text-center">Lịch học đang được cập nhật</td>
            </tr>
        @endif
        </tbody>
    </table>
</div>
