@extends('../home')

@section('content')
<div class="site-section bg-left-half">
      <div class="container">


        <div class="row">
          <div class="col-lg-8 mb-5" >
<form action="store" method="post">
    @csrf

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="emplacement" placeholder="l'emplacement">
                  <p class="help is-danger">{{ $errors->first('emplacement') }}</p>
                </div></div>
                <div class="form-group row">
                <div class="col-md-6">
                  <input type="time" class="form-control" name="time" placeholder="time">
                  <p class="help is-danger">{{ $errors->first('time') }}</p>
                </div>
    <div class="form-group row">
                <div class="col-md-12">
                  <select class="form-control" name="dep" placeholder="">
                  @foreach ($dep as $dep)
                  <option value="{{ $dep->id }}">
                  {{ $dep->name}}
                  </option>
                  @endforeach
                  </select>
                  <p class="help is-danger">{{ $errors->first('emplacement') }}</p>
                </div></div>

                <div class="col-md-6">
                  <input type="date" class="form-control" name="date" placeholder="mettez votre date">
                  <p class="help is-danger">{{ $errors->first('date') }}</p>
                  @if(session('msg') ==='error date')
                    <div class="text">erreur de date</div>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="sujet" class="form-control" placeholder="mettez votre sujet" cols="30" rows="10"></textarea>
                  <p class="help is-danger">{{ $errors->first('sujet') }}</p>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="sauvegarder">
                </div>
              </div>
            </form>
            </div></div></div></div>

            @endsection
