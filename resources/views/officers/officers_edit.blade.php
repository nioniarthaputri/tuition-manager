@extends('layout.master')
@section('title', 'Officers')
@section('parentPageTitle', 'Modules')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}"/>
@stop
@section('content')
<!-- Basic Examples -->
<div class="row clearfix">
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <form id="form_validation" action="{{ action('OfficersController@update', $officer_nioni->id_petugas) }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group form-float {{$errors->has('username') ? ' has-danger' : ''}}">
                        <input type="text" class="form-control" placeholder="Username" name="username" required value="{{ $officer_nioni->username}}">
                    </div>
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Officer Name" name="nama_petugas" required value="{{ $officer_nioni->nama_petugas}}">
                    </div>
                    <div class="form-group">
                        <div class="radio inlineblock m-r-20">
                            <input type="radio" name="level" id="admin" class="with-gap" value="admin"  {{ ($officer_nioni->level == "admin")? "checked" : "" }}>
                            <label for="admin">Admin</label>
                        </div>                                
                        <div class="radio inlineblock">
                            <input type="radio" name="level" id="officer" class="with-gap" value="officer" {{ ($officer_nioni->level == "officers")? "checked" : "" }} >
                            <label for="officer">Officer</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-raised btn-primary waves-effect" type="submit" name="submit">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
       
@stop
@section('page-script')
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@stop