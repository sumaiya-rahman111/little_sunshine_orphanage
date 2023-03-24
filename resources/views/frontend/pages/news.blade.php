@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/news.css">

@endsection





<!-- main content starts here -->
@section('content')


<section id="newsPage">
    <div class="container">
      <div class="news">
        <h1>{{ $data->heading }}</h1>

        <div class="news-date">
          <div class="ndate-icon">
            <i class="fa-solid fa-calendar-days"></i>
          </div>
          <div class="ndate-text">
            <p>{{ $data->date }}</p>
          </div>
        </div>

        <div class="news-location">
          <div class="nlctn-icon">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <div class="nlctn-text">
            <p>{{ $data->location }}</p>
          </div>
        </div>

        <div class="news-body">
          <p>{{ $data->short_description }}</p>

          <div class="news-image">
            <img src="{{ asset('frontend/images/news') }}/{{ $data->photo }}" alt="news-1">
          </div>
          <p>{{ $data->full_description }}</p>
        </div>

        <div class="news-footer">
          @if($newsfdbk != null)
            <div class="nfooter-text">
              <p><b>Rate Us</b></p>
              @foreach($newsfdbk as $nf)
                @if($nf->newsId == $data->id)
                  <h5>{{ $nf->name }}</h5>
                  <small>{{ $nf->email }}</small>
                  <div class="news_comment">
                    <p>{{ $nf->comment }}</p>
                    @if(Auth::user())
                      @if($nf->fid == Auth::user()->id or Auth::user()->role == 1)
                      <span>
                        <a href="{{ route('newsFeedbackdlt',$nf->id) }}" class="btn btn-danger btn-sm">
                          <i class="fa-solid fa-trash"></i>
                        </a>
                      </span>
                      @endif
                    @endif
                  </div>

                @endif
              @endforeach
            </div>
          @endif
          <!-- <div class="nfooter-icon"> -->

          <!-- </div> -->
          <div class="nfooter-cmnt">
            <p class="mb-10">Comment</p>
            <form action="{{ route('newsFeedback',$data->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              <textarea name="ncomment" id="ncomment" cols="60" rows="5" placeholder="Comment Here..." required></textarea>
              <div class="news-button">
                @if(!Auth::user())
                  <abbr title="You have to login for submitting a feedback">
                @endif

                <button class="buttn btn_rounded mt-2" @if(!Auth::user()) disabled @endif>Submit</button>
                
                @if(!Auth::user())
                  </abbr>
                @endif
              </div>
            </form>
          </div>
        </div>

        

      </div>
    </div>
  </section>


@endsection
<!-- main content ends here -->



@section('script')

  <script src="{{ asset('backend/assets/js/plugins/raty/jquery.raty.js') }}"></script>
  <script src="{{ asset('backend/assets/js/plugins/raty/raty.active.js') }}"></script>

@endsection