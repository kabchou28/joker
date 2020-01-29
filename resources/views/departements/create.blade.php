@extends('../home')

@section('content')
<div class="site-section bg-left-half">
      <div class="container">


        <div class="row">
          <div class="col-lg-8 mb-5" >
<form action="store" method="post">
    @csrf
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" name="name" placeholder="nom de département">
                  <p class="help is-danger">{{ $errors->first('name') }}</p>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="type" placeholder="type">
                  <p class="help is-danger">{{ $errors->first('type') }}</p>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="description" id="" class="form-control" placeholder="mettez votre description" cols="30" rows="10"></textarea>
                  <p class="help is-danger">{{ $errors->first('description') }}</p>
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
