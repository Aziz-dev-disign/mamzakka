@extends('dashboard.layouts.accueil')

{{-- @section('title', $titre)
    <h1>{{$titre}}</h1> --}}

@section('content')

@section('title', $titre)
<h3 style="margin-bottom: 10px;">{{$titre}}</h3>

<div class="ln_solid"></div>

<form class="form-horizontal form-label-left"  method="POST" action="{{route('admin.employer.store')}}" enctype="multipart/form-data">
    @csrf

    
    <div class="item form-group row">
        <label class="control-label col-md-3" for="domaine">Domaine d'activité<span class="required">*</span></label>
        <div class="col-md-7">
            <select name="domaine_id" id="domaine" required="required" class="form-control col-md-7 @error('domaine_id') is-invalid @enderror" required  autofocus>
                <option value="">choisir...</option>
                @foreach ($domaines as $domaine)                    
                    <option value=" {{$domaine->id}} ">{{$domaine->nom}}</option>
                @endforeach
            </select>            
            @error('domaine_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="profession">Profession<span class="required">*</span></label>
        <div class="col-md-7">
            <select name="profession_id" id="profession" required="required" class="form-control col-md-7 @error('profession_id') is-invalid @enderror" required  autofocus>
                <option value="">choisir...</option>
                @foreach ($professions as $profession)                    
                    <option value=" {{$profession->id}} ">{{$profession->profession}}</option> 
                @endforeach               
            </select>            
            @error('profession_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>  
    <div class="item form-group row">
        <label class="control-label col-md-3" for="matricule">Matricule <span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="matricule" class="form-control col-md-7  @error('matricule') is-invalid @enderror" name="matricule" placeholder="Exemple : 2020/001A" value="{{ old('matricule') }}" required autocomplete="matricule" autofocus>
            @error('matricule')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
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
        <label class="control-label col-md-3" for="email">Email<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="email"  required="required" class="form-control col-md-7 @error('email') is-invalid @enderror " name="email" placeholder="veillez entrer un prénom"  value="{{ old('email') }}" required autocomplete="email" autofocus>            
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="date">Date de naissance <span class="required">*</span></label>
        <div class="col-md-7">
            <input type="date" id="date"  required="required" class="form-control col-md-7 @error('date') is-invalid @enderror" name="date"  value="{{ old('date') }}" required autofocus>            
            @error('date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 " for="date">Genre<span class="required">*</span></label>
        <div class="col-md-7 col-sm-7"  >
            <div id="genre" class="btn-group" data-toggle="buttons">
                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="genre" value="m" class="join-btn" required="required" class="form-control col-md-7 @error('genre') is-invalid @enderror" > &nbsp; Male &nbsp;
                </label>
                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="genre" value="f" class="join-btn" required="required" class="form-control col-md-7 @error('genre') is-invalid @enderror"> Female
                </label>
            </div>            
            @error('genre')
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
        <label class="control-label col-md-3" for="situation">Situation matrimoniale<span class="required">*</span></label>
        <div class="col-md-7">
            <select name="situation_M" id="situation" required="required" class="form-control col-md-7 @error('situation_M') is-invalid @enderror" required  autofocus>
                <option value="">choisir...</option>
                <option value="marie">Marié</option>
                <option value="celibataire">Célibataire</option>
            </select>            
            @error('situation_M')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="adresse">Adresse<span class="required">*</span></label>
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
        <label class="control-label col-md-3" for="fichier">Fichier<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="file" id="fichier" name="fichier"  required="required" class="form-control col-md-7 @error('fichier') is-invalid @enderror" placeholder=""  required autofocus>            
            @error('fichier')
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