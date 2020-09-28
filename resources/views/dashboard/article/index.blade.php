@extends('dashboard.layouts.accueil')



@section('content')

@section('title', $titre)
<h3 style="margin-bottom: 10px;">{{$titre}}</h3>

<div class="ln_solid"></div>

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("admin.article.create") }}">
                    Ajouter un article
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-55">
        <div class="thumbnail">
            <div class="image view view-first">
                <img style="width: 100%; display: block;" src="{{asset('admin/production/images/media.jpg')}}" alt="image" />
                <div class="mask">
                <p>Entrez un text</p>
                <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#"><i class="fa fa-pencil"></i></a>
                    <a href="#"><i class="fa fa-times"></i></a>
                </div>
                </div>
            </div>
            <div class="caption">
                <p>Ajouter le slug ici</p>
            </div>
        </div>
    </div>
</div>
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("admin.employer.create") }}">
                    Ajouter un article
        </a>
    </div>
</div>

@endsection