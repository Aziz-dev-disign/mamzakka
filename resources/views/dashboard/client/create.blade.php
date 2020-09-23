@extends('dashboard.layouts.accueil')

{{-- @section('title', $titre)
    <h1>{{$titre}}</h1> --}}

@section('content')


@if (\Session::has('success'))
<div class="alert alert-success">
    <p>{{ \Session::get('message') }}</p>
</div><br />
@endif
@if (\Session::has('failure'))
<div class="alert alert-danger">
    <p>{{ \Session::get('failure') }}</p>
</div>
@endif
<form class="form-horizontal form-label-left"  method="POST" action="{{route('admin.client.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="item form-group row">
        <label class="control-label col-md-3" for="nom">Nom <span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="nom"  required="required" class="form-control col-md-7 @error('nom') is-invalid @enderror " name="nom" placeholder="Veillez entrer un nom"  value="{{ old('nom') }}" required autocomplete="nom" autofocus>            
            @error('nom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
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
        <label class="control-label col-md-3" for="date">Date de naissance <span class="required">*</span></label>
        <div class="col-md-7">
            <input type="date" id="date"  required="required" class="form-control col-md-7 @error('date') is-invalid @enderror" name="date_naissance"  value="{{ old('date_naissance') }}" required autofocus>            
            @error('date_naissance')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="telephone">Numéro téléphone<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="telephone" name="telephone"  required="required" class="form-control col-md-7 @error('telephone') is-invalid @enderror" placeholder="Entrer un numéro de téléphone"  value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>            
            @error('telephone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="numero_cnib">Numéro CNIB<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="numero_cnib" name="numero_cnib"  required="required" class="form-control col-md-7 @error('numero_cnib') is-invalid @enderror" placeholder="Hamdallaye, Rue 10.74"  value="{{ old('numero_cnib') }}" required autocomplete="matricule" autofocus>            
            @error('numero_cnib')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="delivre_le">Délivré le<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="date" id="delivre_le" name="delivre_le"  required="required" class="form-control col-md-7 @error('delivre_le') is-invalid @enderror" placeholder="" required autofocus>            
            @error('delivre_le')
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