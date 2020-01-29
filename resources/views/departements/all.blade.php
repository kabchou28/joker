@extends('../home')

@section('content')
@if(session('msg') ==='update')

<div class="text">le département est modifié</div>

@elseif(session('msg') ==='delete')

<div class="text">le département est supprimé</div>

@endif
<h2 class="text-primary mb-5 font-weight-bold">les départements</h2>
@foreach ($dep as $d)
<div class="site-section">
<div class="container">

  <div class="row">
    <div class="col-md-4">
      <div class="owl-carousel slide-one-item">

        <div class="d-md-flex testimony-29101 align-items-stretch">
          <div class="text">
            <blockquote>
             <p>{{ $d->name }}</p>
              <div class="author"> {{ $d->type }}</div>
              <p> {{ $d->description }}</p>
            </blockquote>
          </div>
        </div>
    </div>
  </div>


</div>
</div>
@endforeach
@endsection
