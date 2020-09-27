@extends('dashboard.layouts.accueil')

{{-- @section('title', $titre)
    <h1>{{$titre}}</h1> --}}

@section('content')

@section('title', $titre)
<h3 style="margin-bottom: 10px;">{{$titre}}</h3>

<div class="ln_solid"></div>

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("admin.employer.create") }}">
                    Ajouter un employer
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4  profile_details">    
        <div class="well profile_view">
            <div class="col-sm-12">
            <h4 class="brief"><i>MamZakka Employer</i></h4>
            <div class="left col-sm-7">
                <h2>Nicole Pearson</h2>
                <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                <ul class="list-unstyled">
                <li><i class="fa fa-building"></i> Matricule: </li>
                <li><i class="fa fa-phone"></i> Téléphone #: </li>
                </ul>
            </div>
            <div class="right col-sm-5 text-center">
                <img src="{{asset('admin/production/images/img.jpg')}}" alt="" class="img-circle img-fluid">
            </div>
            </div>
            <div class=" bottom text-center">
                <div class=" col-sm-6 emphasis">
                    <button type="button" class="btn btn-primary btn-sm">
                    <i class="fa fa-user"> </i> Voir le profil
                    </button>
                </div>            
                <div class=" col-sm-6 emphasis">
                    <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                    </i> <i class="fa fa-comments-o"></i> </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("admin.employer.create") }}">
                    Ajouter un employer
        </a>
    </div>
</div>

@endsection