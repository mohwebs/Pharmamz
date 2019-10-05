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
                    <h4 class="text-themecolor">Profil de Pharmacien</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profil de Pharmacien</li>
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
                        <div class="user-bg"> <img width="100%" alt="user" src="{{asset($pharmacien->pic)}}"> </div>
                        <div class="card-body">
                            <!-- .row -->
                            <div class="row text-center m-t-10">
                            <div class="col-md-6 b-r">
                                <strong>Nom</strong>
                                <p>{{$pharmacien->nom}} {{$pharmacien->prenom}}</p>
                            </div>
                            <div class="col-md-6"><strong>Sexe</strong>
                                <p>{{$pharmacien->sexe}}</p>
                            </div>
                        </div>
                        <hr>
                        <!-- /.row -->
                        <!-- .row -->
                        <div class="row text-center m-t-10">
                            <div class="col-md-6 b-r"><strong>Date de naissance</strong>
                                <p>{{$pharmacien->datenaissance}}</p>
                            </div>
                            <div class="col-md-6"><strong>téléphone</strong>
                                <p>{{$pharmacien->tel}}</p>
                            </div>
                        </div>
                        <!-- /.row -->
                        <hr>
                        <!-- .row -->
                        <div class="row text-center m-t-10">
                            <div class="col-md-12"><strong>Email</strong>
                                <p>{{$pharmacien->email}}
                                   </p>
                            </div>
                        </div>
                        <hr>
                        <!-- .row -->
                        <div class="row text-center m-t-10">
                            <div class="col-md-12"><strong>Adresse</strong>
                                <p>{{$pharmacien->adresse}}
                                    <br/> {{$pharmacien->ville}}.</p>
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
                                            <p class="text-muted">{{$pharmacien->nom}}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>téléphone</strong>
                                            <br>
                                            <p class="text-muted">{{$pharmacien->tel}}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                            <br>
                                            <p class="text-muted">{{$pharmacien->email}}</p>
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