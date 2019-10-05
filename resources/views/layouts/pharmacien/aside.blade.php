@php
 $nbf = DB::table('fournisseurs')->count(); 
 $nbph = DB::table('users')->count(); 
   $nbm = DB::table('medicaments')->count(); 
   $nbl = DB::table('lots')->count();  
     $nba= DB::table('achats')->count(); 
     $nbv= DB::table('ventes')->count(); 

@endphp
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
            <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                @if(Auth::user()->pic)
                <img src="{{asset('/'.Auth::user()->pic)}}" alt="user-img" class="img-circle">
                @else
                <img src="{{asset('../assets/images/users/1.jpg')}}" alt="user-img" class="img-circle">
                @endif

                <span class="hide-menu">{{Auth::user()->nom}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('admin/pharmaciens/'.Auth::user()->id.'/show')}}"><i class="ti-user"></i> Mon Profile</a></li>
                        <li><a href="{{url('admin/pharmaciens/'.Auth::user()->id.'/edit')}}"><i class="ti-settings"></i> Parametres</a></li>
                        <li><a href="{{route('logout')}}"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></li>
                    </ul>
                </li>
                <li class="nav-small-cap">--- PERSONAL</li>
                <li> <a class="waves-effect waves-dark" href="admin"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user-md"></i><span class="hide-menu">Pharmaciens<span class="badge badge-pill badge-primary text-white ml-auto">{{$nbph}}</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('admin/pharmaciens/create')}}">Nouveau Pharmaciens</a></li>
                        <li><a href="{{url('admin/pharmaciens/')}}">Listes Pharmaciens</a></li>
                     
                    </ul>
                </li>
               
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Medicaments <span class="badge badge-pill badge-primary text-white ml-auto">{{$nbm}}</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('admin/medicaments/create')}}">Nouveau Medicament</a></li>
                        <li><a href="{{url('admin/medicaments/')}}">Listes des Medicaments</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Lots <span class="badge badge-pill badge-primary text-white ml-auto">{{$nbl}}</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                    <li><a href="{{url('admin/lots/create')}}">Nouveau lots</a></li>
                        <li><a href="{{url('admin/lots/')}}">Listes des lots</a></li>
                    </ul>
                </li>
          
             
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Fournisseurs<span class="badge badge-pill badge-primary text-white ml-auto">{{$nbf}}</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('admin/fournisseurs/')}}">Listes Des Fournisseurs</a></li>
                        <li><a href="{{url('admin/fournisseurs/create')}}">Nouveau Fournisseurs</a></li>
  
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-chart"></i><span class="hide-menu">Ventes<span class="badge badge-pill badge-primary text-white ml-auto">{{$nbv}}</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('admin/ventes/create')}}">Nouveau Vente</a></li>
                        <li><a href="{{url('admin/ventes/')}}">Listes Ventes</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-inr"></i><span class="hide-menu">Achats<span class="badge badge-pill badge-primary text-white ml-auto">{{$nba}}</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                            <li><a href="{{url('admin/achats/create')}}">Nouveau Achat</a></li>
                        <li><a href="{{url('admin/achats/')}}">Listes des Achats</a></li>
                    </ul>
                </li>
     
               
               
           
                <li> <a class="waves-effect waves-dark" href="{{route('logout')}}" aria-expanded="false"><i class="fa fa-circle-o text-danger"></i><span class="hide-menu">Log Out</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>