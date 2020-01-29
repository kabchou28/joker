@extends('../home')
@section('content')
<div class="site-section bg-left-half">
      <div class="container">


        <div class="row">
          <div class="col-lg-8 mb-5" >
<form action="ROLE/{{$role->id}}" method="post">
    @csrf

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ $role->role }}" name="role" placeholder="le label">
                  <p class="help is-danger">{{ $errors->first('role') }}</p>
                </div></div>
                <div class="form-group row">
                <div class="col-md-6">

                @foreach ($act as $act)
                <input type="checkbox" value="{{ $act->id }}" name="act[]" @if($role->activites->contains($act)) checked @endif>{{ $act->label }}
                <p class="help is-danger">{{ $errors->first('act[]') }}</p>
                @endforeach
                <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="sauvegarder">
                </div>
              </div>
                </div>
    </form>
@endsection
