@extends('dashboard.layouts.accueil')

{{-- @section('title', $titre)
    <h1>{{$titre}}</h1> --}}

@section('content')

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("admin.produit.create") }}">
                    Ajouter un produit
        </a>
    </div>
</div>
<div class="card-box table-responsive">
    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
        <thead>
            <tr>
                <th>
                    <th><input type="checkbox" id="check-all" ></th>
                </th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Téléphone</th>
                <th>Numéro CNI</th>
                <th>Date de délivré</th>                
                <th>Options</th>
            </tr>
        </thead>


        <tbody>
            <tr>
                <td>
                    <th><input type="checkbox" id="check-all" ></th>
                </td>
                </tr>
            <tr>
            
        </tbody>
    </table>
  </div>

@endsection