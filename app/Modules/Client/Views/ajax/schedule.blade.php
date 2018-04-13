<table class="table table-responsive table-bordered">
    <thead>
    <tr>
        <th>Mã Số Lớp</th>
        <th>Tổng Số Tuần</th>
        <th>Ngày Học</th>
        <th>Thời Gian</th>
        <th>Ngày Khai Giảng</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach($schedule as $item)
        <tr>
            <td>{!! $item->class_code !!}</td>
            <td>{!! $item->weeks !!}</td>
            <td>{!! $item->days !!}</td>
            <td>{!! $item->class_time_from !!} - {!! $item->class_time_to !!}</td>
            <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d', $item->start_date)->format('d/m/Y') !!}</td>
            <td><a href="{!! route('register') !!}" class="dk">Đăng ký</a></td>
        </tr>
        @endforeach
    </tbody>
</table>