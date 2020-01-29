@extends('../home')
@section('content')
@if(session('msg')==='update')
<div class="text">le réunion est modifié</div>

@elseif(session('msg') ==='delete')

<div class="text">le réunion est supprimé</div>

@elseif(session('msg') ==='create')

<div class="text">le réunion est ajouté</div>
@endif

<div class="site-section">
<div class="container">
@foreach($role as $role)
@if($role->actif === 1)
  <div class="row">
    <div class="col-md-4">
      <div class="owl-carousel slide-one-item">
        <div class="d-md-flex testimony-29101 align-items-stretch">
          <div class="text">
            <blockquote>
             <p>{{ $role->role }}</p>
             @foreach ($role->activites as $ac)
             <p>{{ $ac->label }}</p>
             @endforeach
            </blockquote>
          </div>
        </div>
        </div>
    </div>
  </div>
  @endif
  @endforeach
</div>
</div>

@endsection
