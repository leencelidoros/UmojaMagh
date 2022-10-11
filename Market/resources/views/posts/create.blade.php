@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data"method="post">
            @csrf
            <h1>Add New Post</h1>
   <div class="row">
       <div class="col-8 offset 2 ">
          <div class="form-group row">
              <label for="captions" class="col-md-4 col-form-label text-md-right">{{ __('Post Caption') }}</label>
                  <input id="captions"
                         type="text"
                         class="form-control{{$errors->has('captions')? 'is-invalid':''}}"
                          name="captions"
                         value="{{ old('captions') }}"
                         required autocomplete="captions" autofocus>
              @if($errors->has('captions'))
{{--                  class="invalid-feedback" role="alert">--}}
                      <strong>{{ $errors->first('captions') }}</strong>

              @endif
          </div>
           <div class="row">
               <label for="image" class="col-form-label col-md-5">Post Images</label>
               <input type="file"
                      class="form-control-file"
                      id="image"
                      name="image">
               @if($errors->has('image'))

                   <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('image') }}</strong>
                   </span>
               @endif
           </div>
           <div class="row pt-3">
               <button class="btn btn-primary"size="pb-2">Submit Post</button>
           </div>
       </div>
   </div>
        </form>

    </div>
@endsection

