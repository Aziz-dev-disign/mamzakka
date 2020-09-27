@extends('dashboard.layouts.accueil')

{{-- @section('title', $titre)
    <h1>{{$titre}}</h1> --}}

@section('content')

@section('title', $titre)
<h3 style="margin-bottom: 10px;">{{$titre}}</h3>

<div class="ln_solid"></div>

<form class="form-horizontal form-label-left"  method="POST" action="{{route('admin.partenaire.store')}}" enctype="multipart/form-data">
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
        <label class="control-label col-md-3" for="contact">Numéro téléphone<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="contact" name="contact"  required="required" class="form-control col-md-7 @error('contact') is-invalid @enderror" placeholder="Entrer un numéro de téléphone"  value="{{ old('contact') }}" required autocomplete="contact" autofocus>            
            @error('contact')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="numero_cnib">Numéro du CNI <span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="numero_cnib"  required="required" class="form-control col-md-7 @error('numero_cnib') is-invalid @enderror" name="numero_cnib"  value="{{ old('numero_cnib') }}" placeholder="Exemple: B5054378" required autofocus>            
            @error('numero_cnib')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="delivre_le">Delivré le <span class="required">*</span></label>
        <div class="col-md-7">
            <input type="date" id="delivre_le"  required="required" class="form-control col-md-7 @error('delivre_le') is-invalid @enderror" name="delivre_le"  value="{{ old('delivre_le') }}" required autofocus>            
            @error('delivre_le')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="adresse">Adresse <span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="adresse" name="adresse"  required="required" class="form-control col-md-7 @error('adresse') is-invalid @enderror" placeholder="Hamdallaye, Rue 10.74"  value="{{ old('adresse') }}" required autocomplete="matricule" autofocus>            
            @error('adresse')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="numero">Numéro compte bancaire<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="number" id="numero" name="numero"  required="required" class="form-control col-md-7 @error('numero') is-invalid @enderror" placeholder="Exemple: 40445585664788"  required autofocus>            
            @error('numero')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="prestation">Prestation<span class="required">*</span></label>
        <div class="col-md-7">
        <select id="prestation" name="prestation"  required="required" class="form-control col-md-7 @error('prestation') is-invalid @enderror"  required autofocus>
            <option value="">Veillez choisir</option>
            <option value="location">Mis en location</option>
            <option value="vente">Mis en vente</option>
        </select>
            @error('prestation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="fichier_cnib">Fichier du CNI<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="file" id="fichier_cnib" name="fichier_cnib"  required="required" class="form-control col-md-7 @error('fichier_cnib') is-invalid @enderror" placeholder="" required autofocus>            
            @error('fichier_cnib')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="fichier_article">Fichier Suplémentaire<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="file" id="fichier_article" name="fichier_article"  required="required" class="form-control col-md-7 @error('fichier_article') is-invalid @enderror" placeholder="" required autofocus>            
            @error('fichier_article')
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