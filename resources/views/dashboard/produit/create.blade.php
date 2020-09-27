@extends('dashboard.layouts.accueil')

{{-- @section('title', $titre)
    <h1>{{$titre}}</h1> --}}

@section('content')

<form class="form-horizontal form-label-left"  method="POST" action="{{route('admin.produit.store')}}" enctype="multipart/form-data">
    @csrf

    
    <div class="item form-group row">
        <label class="control-label col-md-3" for="client_id">Client<span class="required">*</span></label>
        <div class="col-md-7">
            <select name="client_id" id="client_id" required="required" class="form-control col-md-7 @error('client_id') is-invalid @enderror" required  autofocus>
                <option value="">choisir...</option>
                @foreach ($clients as $client)
                    <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
                @endforeach
            </select>            
            @error('client_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="type">Type d'article<span class="required">*</span></label>
        <div class="col-md-7">
            <select name="type_id" id="type" required="required" class="form-control col-md-7 @error('type_id') is-invalid @enderror" required  autofocus>
                <option value="">choisir...</option>
                @foreach ($types as $type)                    
                    <option value=" {{$type->id}} ">{{$type->nom}}</option> 
                @endforeach               
            </select>            
            @error('type_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>    
    <div class="item form-group row">
        <label class="control-label col-md-3" for="prix">Prix<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="prix"  required="required" class="form-control col-md-7 @error('prix') is-invalid @enderror" name="prix" placeholder="FCFA"  value="{{ old('prix') }}" required autofocus>            
            @error('prix')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="numero_article">Numéro d'article <span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="numero_article" class="form-control col-md-7  @error('numero_article') is-invalid @enderror" name="numero_article" placeholder="Exemple : 2020/001A" value="{{ old('numero_article') }}" required autocomplete="numero_article" autofocus>
            @error('numero_article')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="superficie">Superficie <span class="required">*</span></label>
        <div class="col-md-7">
            <input type="text" id="superficie"  required="required" class="form-control col-md-7 @error('superficie') is-invalid @enderror " name="superficie" placeholder="Veillez entrer un superficie"  value="{{ old('superficie') }}" required autocomplete="superficie" autofocus>            
            @error('superficie')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="date">Date <span class="required">*</span></label>
        <div class="col-md-7">
            <input type="date" id="date"  required="required" class="form-control col-md-7 @error('date') is-invalid @enderror" name="date" placeholder=""  value="{{ old('date') }}" required autofocus>            
            @error('date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="item form-group row">
        <label class="control-label col-md-3" for="numero_recu">Numéro reu<span class="required">*</span></label>
        <div class="col-md-7">
            <input type="number" id="numero_recu" name="numero_recu"  required="required" class="form-control col-md-7 @error('numero_recu') is-invalid @enderror" placeholder="Exemple: 001" required autofocus>            
            @error('numero_recu')
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