@extends('dashboard.layouts.accueil')

{{-- @section('title', $titre)
    <h1>{{$titre}}</h1> --}}

@section('content')

<form class="form-horizontal form-label-left"  method="POST" action="" enctype="multipart/form-data">
    @csrf

    <div class="item form-group row">
        <label class="control-label col-md-3" for="prenom">Prénom<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="prenom"  required="required" class="form-control col-md-7 @error('prenom') is-invalid @enderror " name="prenom" placeholder="veillez entrer un prénom"  value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>            
            @error('prenom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="function">Function<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="function"  required="required" class="form-control col-md-7 @error('function') is-invalid @enderror" name="function_naissance" placeholder="Exemple: Agent"  value="{{ old('function_naissance') }}" required autofocus>            
            @error('function_naissance')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="telephone">Téléphone<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="telephone" name="telephone"  required="required" class="form-control col-md-7 @error('telephone') is-invalid @enderror" placeholder="(00226)70 18 08 74"  value="{{ old('telephone') }}" required autocomplete="matricule" autofocus>            
            @error('telephone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="photo">Photo<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="file" id="photo" name="photo"  required="required" class="form-control col-md-7 @error('photo') is-invalid @enderror" placeholder="" required autofocus>            
            @error('photo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group row">
        <div class="col-md-9 col-sm-9  offset-md-3">
            <button type="button" class="btn btn-primary">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>

@endsection