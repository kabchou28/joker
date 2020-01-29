@extends('../home')

@section('content')
<div class="site-section bg-left-half">
      <div class="container">


        <div class="row">
          <div class="col-lg-8 mb-5" >
<form action="reu/{{ $re->id }}" method="post">
    @csrf
    @method('POST')
    <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="emplacement" value="{{ $re->emplacement }}" placeholder="l'emplacement">
                  <p class="help is-danger">{{ $errors->first('emplacement') }}</p>
                </div></div>
                <div class="form-group row">
                <div class="col-md-6">
                  <input type="time" class="form-control" value="{{ $time }}" name="time" placeholder="time">
                  <p class="help is-danger">{{ $errors->first('time') }}</p>
                </div>


                <div class="col-md-6">
                  <input type="date" class="form-control" name="date" value="{{ $date }}" placeholder="mettez votre date">
                  <p class="help is-danger">{{ $errors->first('date') }}</p>
                  @if( $msg ?? '' ==='error date')
                    <div class="text">erreur de date</div>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <select class="form-control" name="dep">
                  @foreach ($dep as $dep)
                  <option value="{{ $dep->id }}"  selected="@if ( $dep === $re->departement_id ) selected @endif" >
                  {{ $dep->name}}
                  </option>
                  @endforeach
                  </select>
                  <p class="help is-danger">{{ $errors->first('emplacement') }}</p>
                </div></div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="sujet" class="form-control" placeholder="mettez votre sujet" value="{{ $re->sujet }}" cols="30" rows="10">{{ $re->sujet }}</textarea>
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
