    <!-- ================== News Section Start ========================= -->

    <section id="news">
        <div class="container">
            <div class="news-heading">
                <h4>Insights And Update</h4>
                <div class="header-button">
                    <h2>Our Recent Blog And News</h2>
                    <div class="button">
                        <a href="{{ route('showIsts') }}" class="buttn btn_rounded">View All Blogs</a>
                    </div>
                </div>
            </div>

            <div class="news-content">
                <?php $sl = 1; ?>
                @foreach($newsData as $data)
                <div class="news-left">
                    <div class="details">
                        <h3>{{ $data->heading }}</h3>
                        <p>{{ $data->short_description }}</p>

                        <div class="button">
                            <a href="{{ route('singleNews',$data->id) }}" class="buttn btn_rounded">See More</a>
                        </div>
                    </div>

                    <div class="photo">
                        <img src="{{ asset('frontend/images/news') }}/{{ $data->photo }}" alt="n1">
                    </div>
                </div>

                <?php $sl++ ?>

                @endforeach
            </div>
        </div>
    </section>
    <!-- ==================== News Section End ========================= -->