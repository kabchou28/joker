@extends('../home')
@section('content')
@if(session('msg')==='update')
<div class="text">le réunion est modifié</div>

@elseif(session('msg') ==='delete')

<div class="text">le réunion est supprimé</div>

@elseif(session('msg') ==='create')

<div class="text">le réunion est ajouté</div>
@endif
@foreach($re as $r)
<div class="site-section">
<div class="container">

  <div class="row">
    <div class="col-md-4 @if( $date>$r->date_reunion) offset-4 @endif ">
      <div class="owl-carousel slide-one-item">
        <div class="d-md-flex testimony-29101 align-items-stretch">
          <div class="text">
            <blockquote>
             <p>{{ $r->emplacement }}</p>
              <div class="author"> {{ $r->date_reunion }}</div>
              <p> {{ $r->sujet }}</p>
            </blockquote>
          </div>
        </div>
    </div>
  </div>

</div>
</div>

@endforeach
@endsection
