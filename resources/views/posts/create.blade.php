@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add new post</h1>
                </div>

                 <div class="form-group row">
                     <label for="caption" class="col-md-4 col-form-label">{{ __('Post caption') }}</label>
     
                     <input 
                         id="caption" 
                         type="text" 
                         class="form-control @error('caption') is-invalid @enderror" 
                         name="caption" value="{{ old('caption') }}"
                         autocomplete="caption"
                     >
     
                     @error('caption')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                 </div>

                 <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Post image') }}</label>

                    <input 
                        id="image" 
                        type="file" 
                        class="form-control-file" 
                        name="image" value="{{ old('image') }}"
                        autocomplete="image"
                    >
    
                    @error('image')
                        <strong>{{ $message }}</strong>
                     @enderror
                </div>

                <div class="form-group row pt-4">
                    <button class="btn btn-primary">Add new post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
