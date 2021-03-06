
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
            <a href="/admin"><i class="fa fa-dashboard"></i><span>DASHBOARD</span></a>
           
          </li>
          <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-user"></i><span>MEMBERSHIP</span></a>
            <div class="sidebar-submenu">
              <ul>
                <li><a href="/admin/member/view">View All Members<span class="badge">2</span></a></li>
                <li><a href="admin/member/create">Add new Member</a></li>
               
                @foreach($membs as $memb)
                <li><a href="/admin/member/{{ $memb->id }}">Settings</a></li>
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
                  
                <li><a href="/admin/member/{{ $members->id }}">Member Settings</a></li>
               
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
        
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="form-group">
             {!! Form::open(['action'=>['MembershipController@update',$members->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}

             {!! Form::label('Title','Title',['class'=>'form-control']) !!} 
              {!! Form::select('Title', ['Mr'=>'Mr','Mrs'=>'Mrs','Miss'=>'Miss','Dr'=>'Dr'],$members->Title ,['class'=>'form-control','placeholder'=>'-Title- ']) !!} <br>

                  
       {!! Form::label('Surname','Surname',['class'=>'form-control ']) !!} 
                {!! Form::text('surname', $members->surname, ['class'=>'form-control','placeholder'=>'Surname']) !!} <br>
      


       {!! Form::label('Othernames','Other names',['class'=>'form-control ']) !!} 
                {!! Form::text('othernames', $members->othernames, ['class'=>'form-control','placeholder'=>'Othernames']) !!} <br>


       {!! Form::label('dateofbirth','Date Of Birth',['class'=>'form-control ']) !!} 
               {!! Form::date('date', $members->date_of_birth, ['class'=>'form-control']) !!} <br><br>


      
      {!! Form::label('sex','Sex',['class'=>'form-control']) !!} 
              {!! Form::select('sex', ['Male'=>'Male','Female'=>'Female'],$members->sex ,['class'=>'form-control','placeholder'=>'-Sex- ']) !!} <br>

    


       {!! Form::label('Birthplace','Place of Birth',['class'=>'form-control ']) !!} 
                {!! Form::text('birth_place',$members->birth_place, ['class'=>'form-control','placeholder'=>'Place of Birth']) !!} <br>


      
      {!! Form::label('maritalStatus','Marital Status',['class'=>'form-control']) !!} 
              {!! Form::select('marital_status', ['Single'=>'Single','Married'=>'Married'],$members->marital_status ,['class'=>'form-control','placeholder'=>'-Marital Status- ']) !!} <br>


      
      
      {!! Form::label('Telephone','Telephone',['class'=>'form-control ']) !!} 
                {!! Form::text('telephone', $members->telephone, ['class'=>'form-control','placeholder'=>'Othernames']) !!} <br>

      

      {!! Form::label('E-mail','Email',['class'=>'form-control ']) !!} 
                {!! Form::text('e_mail_address', $members->e_mail_address, ['class'=>'form-control','placeholder'=>'E-mail']) !!} <br>



                {!! Form::label('address','Address',['class'=>'form-control ']) !!} 
               {!! Form::textarea('address',$members->address, ['class'=>'form-control ','placeholder'=>'Address ']) !!}<br>



        {!! Form::label('City','City/Town',['class'=>'form-control ']) !!} 
                {!! Form::text('city_town',$members->city_town, ['class'=>'form-control','placeholder'=>'City/Town']) !!} <br>





      {!! Form::label('Occupation','Occupation',['class'=>'form-control ']) !!} 
                {!! Form::text('occupation', $members->occupation, ['class'=>'form-control','placeholder'=>'Occupation']) !!} <br>

        



      {!! Form::label('Position','Position',['class'=>'form-control']) !!} 
              {!! Form::select('position', ['Family Head'=>'Family Head','Media Head'=>'Media Head','Technical Head'=>'Technical Head','Choir Head'=>'Choir Head'],$members->position ,['class'=>'form-control','placeholder'=>'-Position- ']) !!} <br>

          

                {!! Form::label('profile_pic','Upload Photo here',['class'=>'form-control ']) !!}
                 {!! Form::file('profile_pic', ['class'=>'form-control']) !!}<br><br> 
                 
         {!! Form::hidden('_method','PUT') !!} 
       {!! Form::submit('submit', ['class'=>'btn btn-primary mt-3 ']) !!} 

              {!! Form::close() !!}  
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







































