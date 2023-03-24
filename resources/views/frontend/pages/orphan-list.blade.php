@extends('frontend.master.mastering')

@section('link')

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/orphan-list.css">

@endsection





<!-- main content starts here -->
@section('content')



<section id="orphan-list">
    <div class="container">
      <div class="orphan-list">
        <h1>List Of Orphans</h1>

        <div class="orphan-grid">
          @foreach($datas as $data)
          <abbr title="Click on the card to view details the child!">
            <div class="orphan-detail">
              <a href="{{ route('orphanDetails',$data->id) }}">
                <div class="orphan-info">

                  <div class="orph-image">
                    <img src="{{ asset('backend/imageStore/orphans') }}/{{ $data->picture }}" alt="{{ $data->name }}">
                  </div>
        
                  <div class="orph-text">
        
                    <div class="orph-name">
                      <p class="olil">
                        <b>Name : </b>
                        <span>{{ $data->name }}</span>
                      </p>
                    </div>
        
                    <div class="orph-id">
                      <p class="olil">
                        <b>ID : </b>
                        <span>{{ $data->id }}</span>
                      </p>
                    </div>
        
                  </div>
        
                </div>
              </a>
            </div>
          </abbr>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  
  @endsection
<!-- main content ends here -->



@section('script')


@endsection