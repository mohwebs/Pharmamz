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
                    <h4 class="text-themecolor">Profil de fournisseur</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profil de fournisseur</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
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
                <!-- Column -->
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <!-- .row -->
                            <div class="row text-center m-t-10">
                            <div class="col-md-6 b-r">
                                <strong>Nom</strong>
                                <p>{{$fournisseur->nom}} {{$fournisseur->prenom}}</p>
                            </div>
                            <div class="col-md-6"><strong>téléphone</strong>
                                <p>{{$fournisseur->tel}}</p>
                            </div>
                        </div>
                        
                        <!-- /.row -->
                        <!-- .row -->
                 
                        <!-- /.row -->
                        <hr>
                        <!-- .row -->
                        <div class="row text-center m-t-10">
                            <div class="col-md-12"><strong>Email</strong>
                                <p>{{$fournisseur->email}}
                                   </p>
                            </div>
                        </div>
                        <hr>
                        <!-- .row -->
                        <div class="row text-center m-t-10">
                            <div class="col-md-12"><strong>Adresse</strong>
                                <p>{{$fournisseur->adresse}}
                                    <br/> {{$fournisseur->ville}}.</p>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Biography</a> </li>
                          
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                         
                            <!--second tab-->
                            <div class="tab-pane active" id="profile" role="tabpanel">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Nom</strong>
                                            <br>
                                            <p class="text-muted">{{$fournisseur->nom}}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>téléphone</strong>
                                            <br>
                                            <p class="text-muted">{{$fournisseur->tel}}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                            <br>
                                            <p class="text-muted">{{$fournisseur->email}}</p>
                                        </div>
                                     
                                    </div>
                                    <hr>
                                    <p class="m-t-30">Description</p>
                                        
                               
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
       
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>

@endsection