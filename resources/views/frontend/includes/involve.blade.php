    <!-- ================= Involve Section Start ==================== -->
    
    @if($data)
    <section id="involve">
        <div class="container">
            <p>Get Involved</p>
            <h2>Let's Make A Difference Today</h2>

            <div class="involve-card">
                <div class="item">
                    <div class="txt">
                            <h3>{{ $data->heading }}</h3>
                            <p>{{ $data->desc }}</p>
                            @if($data->action == 'volunteer')
                            <a href="{{ Route('volunteer') }}" class="buttn btn_rounded">{{ $data->button }}</a>
                            @elseif($data->action == 'partner')
                            <a href="{{ Route('partner') }}" class="buttn btn_rounded">{{ $data->button }}</a>
                            @elseif($data->action == 'sponsor')
                            <a href="{{ Route('sponsor') }}" class="buttn btn_rounded">{{ $data->button }}</a>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- ================= Involve Section End ====================== -->