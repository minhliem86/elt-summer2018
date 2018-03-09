<div class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-transform: uppercase;">{!! $event->title !!}</h4>
            </div>
            <div class="modal-body">
                <p class="text-modal"><b>Thời Gian:</b> {!! \Carbon\Carbon::parse($event->start)->format('d/m/Y H:i') !!}</p>
                <p class="text-modal"><b>Kết Thúc:</b> {!! \Carbon\Carbon::parse($event->end)->format('d/m/Y H:i') !!}</p>
                <p class="text-modal"><b>Địa Điểm:</b> {!! $event->name_vi !!} - {!! $event->address_vi !!}</p>
                <p class="text-modal"><b>Liên Hệ:</b> {!! $event->phone !!}</p>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->