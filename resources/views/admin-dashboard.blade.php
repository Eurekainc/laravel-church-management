@extends('layouts.app')

<link href= "{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

@section('content')

 
    {{-- sidebarr --}}

<div class="page-wrapper toggled">
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <a href="#" id="toggle-sidebar">
      <div class="sidebar-brand">
        <a href="#">TLS</a>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="http://127.0.0.1:8080/admin.jpg" alt="admin-profile" width="60px">
        </div>
        <div class="user-info">
          <span class="user-name">
            @foreach($admins as $admin)
            {{ $admin->name }}
            @endforeach
          </span>

          <span class="user-role">Administrator</span>
          <div class="user-status">
            <a href="#">
              <i class="fa fa-circle"></i>
              <span>Online</span></a>
          </div>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
      
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu"><span>General</span></li>
          <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-dashboard"></i><span>DASHBOARD</span></a>
           
          </li>
          <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-user"></i><span>MEMBERSHIP</span></a>
            <div class="sidebar-submenu">
              <ul>
                <li><a href="/admin/member/view">View All Members<span class="badge"></span></a></li>
                <li><a href="admin/member/create">Add new Member</a></li>
               
                @foreach($members as $member)
                <li><a href="/admin/member/{{ $member->id }}">Member Settings</a></li>
                @endforeach
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-fire"></i><span>SERVICES</span></a>
            <div class="sidebar-submenu">
              <ul>
                <li><a href="/admin/services/view">View Services</a></li>
                <li><a href="/admin/service/create">Add Service</a></li>
                 
               
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="/admin/group-units/view"><i class="fa fa-users"></i><span>GROUPS/UNITS</span></a>
            
          </li>

          <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-money"></i><span>FINANCE</span></a>
            <div class="sidebar-submenu">
              <ul>
                <li><a href="/admin/finance/income-expenses/view">Income</a></li>
                <li><a href="/admin/finance/income-expenses/view">Expense</a></li>
                <li><a href="/admin/services/view">Remitance</a></li>
                <li><a href="/admin/finance/financial-report">Financial Report</a></li>
              </ul>
            </div>
          </li>s


            <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-cog"></i><span>SETTINGS</span></a>
            <div class="sidebar-submenu">
              <ul>
                 @foreach($members as $member)
                <li><a href="/admin/member/{{ $member->id }}">Member Settings</a></li>
                @endforeach
                <li><a href="/admin/services/view">Service Settings</a></li>
               
                <li><a href="/admin/group-units/view">Group Settings</a></li>
              </ul>
            </div>
          </li>
         
          
          


        </ul>
      </div>
      <!-- sidebar-menu  -->
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->

    
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="container-fluid">
          <div class="row">
          <div class="col-sm">

            {{-- admin dashboard --}}
        <div class="card  " style="height: 120px; width: 450px; background-color: #00D3FFFF;color: white" >
          <div class="card-body ">
            <strong>Members</strong><br>

            <span style="font-weight: bolder;font-size: 50px;">{{ count($members)}}</span>

            <span class="float-right"><i class="fa fa-user fa-5x " style = "color: black;opacity: 0.2"></i></span>
          </div>

           
            </div>
            <div class="card  " style="height: 120px; width: 450px;position: relative;left: 500px;top: -120px;background-color: #06C546C4;color: white">
          <div class="card-body">
            <strong>Groups</strong><br>

             <span style="font-weight: bolder;font-size: 50px;">{{ count($group_units)}}</span>

            <span class="float-right"><i class="fa fa-users fa-5x " style = "color: black;opacity: 0.2"></i></span>
            </div>
            </div>
            
           <div class="card" style="height: 120px; width: 450px;position: relative;left: 5px;top: 20px;background-color: #E8A800FF;color: white">
          <div class="card-body">
            <strong>Finances</strong><br>


             <span class="float-right"><i class="fa fa-money fa-5x " style = "color: black;opacity: 0.2"></i></span>
            
            </div>
            </div>

            <div class="card" style="height: 120px; width: 450px;position: relative;left: 500px;top: -100px;background-color: #D63532DB; color: white">
          <div class="card-body">
            <strong>Services</strong><br>

            <span style="font-weight: bolder;font-size: 50px;">{{ count($services)}}</span>

             <span class="float-right"><i class="fa fa-fire fa-5x " style = "color: black;opacity: 0.2"></i></span>
           
            </div>
            </div>
          
        </div>



       </div>
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->



   

    <!-- Load sidebar Toggle Script -->
    <script src="{{ asset('/js/sidebar.js') }}">
    </script>







@endsection


