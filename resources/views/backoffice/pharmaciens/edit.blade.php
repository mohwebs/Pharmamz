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
                    <h4 class="text-themecolor">Nouveau Pharmacien</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Modifier Pharmacien</li>
                        </ol>
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
                            <h4 class="m-b-0 text-white">Creer un Nouveau pharmacien/h4>
                        </div>
                        <div class="card-body">
                        <form  action="{{url('admin/pharmaciens/'.$pharmacien->id)}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <div class="form-body">
                                    <h3 class="card-title">Des information personel</h3>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nom</label>
                                                <input name="nom" type="text" id="nom" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" value="{{ $pharmacien->nom }}" required autocomplete="nom" autofocus>
                                                @error('nom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror</div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Prenom</label>
                                                <input name="prenom" type="text" id="lastName" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" value="{{ $pharmacien->prenom}}" required autocomplete="prenom" autofocus>
                                                @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Sexe</label>
                                                <select name="sexe" class="form-control{{ $errors->has('sexe') ? ' is-invalid' : '' }}" value="{{ $pharmacien->sexe}}" required autocomplete="sexe" autofocus>
                                                    <option value="homme" @if($pharmacien->sexe === "homme") selected @endif >Homme</option>
                                                    <option value="femme" @if($pharmacien->sexe === "femme") selected @endif >Femme</option>
                                                </select>
                                                @error('sexe')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror</div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Date de naissance</label>
                                                <input name="datenaissance" type="date" class="form-control{{ $errors->has('datenaissance') ? ' is-invalid' : '' }}" value="{{ $pharmacien->datenaissance }}" required autocomplete="datenaissance" autofocus placeholder="dd/mm/yyyy">
                                                @error('datenaissance')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Telephone:</label>
                                                    <input name="tel" type="text" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" value="{{ $pharmacien->tel }}" required autocomplete="tel" autofocus placeholder="Votre numero de telephone">
                                                    @error('tel')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input  name="email" type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $pharmacien->email }}" required autocomplete="email" autofocus placeholder="example@mail.com">
                                                    @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror</div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Pseudo</label>
                                                        <input  name="username" type="text" id="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ $pharmacien->username }}" required autocomplete="username" autofocus placeholder="pseudonyme">
                                                        @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror </div>
                                                </div>
                                            <!--/span-->
                                        </div>
                                
                                        <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Mot de passe:</label>
                                                        <input name="password" type="password" id="firstName" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password" placeholder="Introduire le mot passe">
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror</div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Confirmer mot de passe:</label>
                                                        <input name="password_confirmation" type="password"  class="form-control form-control-danger" placeholder="Confirmer votre mot de passe">
                                                        @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                    <!--/row-->
                                    <h3 class="box-title m-t-40">Address</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label>Adresse</label>
                                            <input name="adresse" type="text" class="form-control" value="{{$pharmacien->adresse}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ville</label>
                                            <input name="ville" type="text" class="form-control" value="{{$pharmacien->ville}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Code postal</label>
                                                <input name="postal" type="text" class="form-control" value="{{$pharmacien->postal}}">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label>Photo</label>
                                                <input name="image" type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
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