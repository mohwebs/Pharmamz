@extends('layouts.pharmacien.master')


@section('content')

<div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Nouveau Achat</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Acceuil</a></li>
                            <li class="breadcrumb-item active">Nouveau Achat</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i><a href="{{url('admin/achats/create')}}">Nouveau achat</a></button>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h4 class="m-b-0 text-white">Creer un nouveau achat</h4>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="{{url('admin/achats/'.$achat->id)}}" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">

                                @csrf
                                <div class="form-body">
                                    <h3 class="card-title">Informations achat</h3>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Date</label>
                                                <input name="date" type="date" id="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{ $achat->date }}" required autocomplete="date" autofocus>
                                                @error('date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror</div>
                                        </div>
                                        <!--/span-->
                                      
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                   
                                    <!--/row-->
                                 
                                
                                    <!--/row-->
                                    <hr>
                               
                                    <div class="row">
                                    
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Fournisseur</label>
                                                    <select name="fournisseur" class="form-control{{ $errors->has('fournisseur') ? ' is-invalid' : '' }}" value="{{ old('fournisseur') }}" required autocomplete="fournisseur" autofocus>
                                                        @foreach ( $fournisseurs as $fournisseur)
                                                        <option value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
   
                                                        @endforeach
                                                    </select>
                                                    @error('fournisseur')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror</div>
                                            </div>
                                        <!--/span-->
                                       
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                   
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    <button type="button" class="btn btn-inverse">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <!-- Row -->
          
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
      
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>



@endsection