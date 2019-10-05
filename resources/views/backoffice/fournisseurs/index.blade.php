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
                    <h4 class="text-themecolor">Liste des fournisseurs</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Acceuil</a></li>
                            <li class="breadcrumb-item active">Liste des fournisseurs</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> <a href="{{url('admin/fournisseurs/create')}}">Nouveau fournisseur</a></button>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Liste des fournisseurs</h4>
                            <table id="demo-foo-addrow" class="table m-t-30 footable table-hover contact-list" data-sorting="true" data-filtering="true" data-paging="true">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nom</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
    
                                    @foreach ($fournisseurs as $fournisseur)
                                    <tr>
                                            <td>{{$fournisseur->id}}</td>
                                            <td>{{$fournisseur->nom}}</td>
                                            <td>{{$fournisseur->tel}}</td>
                                            <td>{{$fournisseur->email}}</td>
                                            <td class="text-nowrap">
                                                    
                                                      
                                             <a href="{{url('admin/fournisseurs/'.$fournisseur->id.'/show')}}" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-eye text-inverse m-r-10"> </i> </a>
                                             <a href="{{url('admin/fournisseurs/'.$fournisseur->id.'/edit')}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                              <!-- Button trigger modal -->
                                              <a href="#supprimer{{ $fournisseur->id }}Modal" role="button" class="btn btn-danger btn-sm" data-toggle="modal" id="sa-params">Supprimer</a>
                                              <div class="modal fade" id="supprimer{{ $fournisseur->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $fournisseur->id }}ModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="supprimer{{ $fournisseur->id }}ModalLabel">Supprimer</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    Etes-vous sûre de vouloir supprimer  <strong>{{ $fournisseur->nom.' '.$fournisseur->prenom }} ?</strong>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                                                    <form class="form-inline" action="{{ url ('admin/fournisseurs/'.$fournisseur->id) }}"  method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Oui</button>
                                                         </form>
                                                    
                                                    </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                 
                          
                                </tbody>
                            </table>
            
                        </div>
                    </div>
                  
                    <!-- Column -->
             
                    <!-- Column -->
             
                    <!-- Column -->
               
                </div>
            </div>
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