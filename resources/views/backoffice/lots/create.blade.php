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
                    <h4 class="text-themecolor">Nouveau lot</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Acceuil</a></li>
                            <li class="breadcrumb-item active">Nouveau lot</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i><a href="{{url('admin/lots/create')}}">Nouveau lot</a></button>
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
                            <h4 class="m-b-0 text-white">Creer un nouveau lot</h4>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="{{url('admin/lots')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <h3 class="card-title">Informations sur le lot</h3>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Date Fabrication</label>
                                                <input name="datefab" type="date" id="datefab" class="form-control{{ $errors->has('datefab') ? ' is-invalid' : '' }}" value="{{ old('datefab') }}" required autocomplete="datefab" autofocus>
                                                @error('datefab')
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
                                    <div class="row p-t-20">
                                         
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Date Expired</label>
                                                    <input  name="dateper" type="date" id="dateper" class="form-control{{ $errors->has('dateper') ? ' is-invalid' : '' }}" value="{{ old('dateper') }}" required autocomplete="dateper" autofocus >
                                                    @error('dateper')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror</div>
                                            </div>
                                           
                                            <!--/span-->
                                        </div>
                                
                                    <!--/row-->
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label>Prix</label>
                                                <input name="prix" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Quantité D'achats</label>
                                                <input name="qtachete" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Quantité Stock</label>
                                                <input name="qtstock" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!--/span-->
                                       
                                        <!--/span-->
                                    </div>

                                    <div class="row">
                                    
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">achat</label>
                                                        <select name="achat" class="form-control{{ $errors->has('achat') ? ' is-invalid' : '' }}" value="{{ old('achat') }}" required autocomplete="achat" autofocus>
                                                            @foreach ( $achats as $achat)
                                                            <option value="{{$achat->id}}">{{$achat->id}}</option>
       
                                                            @endforeach
                                                        </select>
                                                        @error('achat')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror</div>
                                                </div>

                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Medicament</label>
                                                            <select name="medicament" class="form-control{{ $errors->has('medicament') ? ' is-invalid' : '' }}" value="{{ old('achat') }}" required autocomplete="achat" autofocus>
                                                                @foreach ( $medicaments as $medicament)
                                                                <option value="{{$medicament->id}}">{{$medicament->nom}}</option>
           
                                                                @endforeach
                                                            </select>
                                                            @error('medicament')
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