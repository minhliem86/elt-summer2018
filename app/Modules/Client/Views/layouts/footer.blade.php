<!--====================== Footer ======================-->
<footer class="bg-yellow">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-content-container">
                    <div class="col col-four">
                        <a href="{!! route('register') !!}" class="btn btn-reg">ĐĂNG KÝ NGAY</a>
                        <p class="text-col">Để nhận ngay ưu đãi</p>
                    </div>
                    <div class="col col-second">
                        <h4 class="title">CHƯƠNG TRÌNH HÈ 2018</h4>
                        <ul class="list-program">
                            @if(!$program->isEmpty())
                                @foreach($program as $item_program)
                                <li><a href="{!! route('program.detail', $item_program->slug) !!}">{!! $item_program->name !!}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="col col-third">
                        <a target="_blank" href="http://ila.edu.vn/" class="website">www.ila.edu.vn</a>
                        <a href="mailto:info@ilavietnam.edu.vn" class="mail">info@ilavietnam.edu.vn</a>
                        <a target="_blank" href="https://www.facebook.com/ilavn/" class="fb">www.facebook.com/ilavn/</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
<!--====================== /Footer ======================-->