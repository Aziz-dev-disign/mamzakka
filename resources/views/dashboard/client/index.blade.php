@extends('dashboard.layouts.accueil')

 

@section('content')

@section('title', $titre)
<h3 style="margin-bottom: 10px;">{{$titre}}</h3>

<div class="ln_solid"></div>

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("admin.client.create") }}">
                    Ajouter un client
        </a>
    </div>
</div>
<div class="card-box table-responsive">
    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
        </thead>


        <tbody>

        </tbody>
    </table>
</div>

@endsection

@section('script')
    <script>

    </script>
@endsection