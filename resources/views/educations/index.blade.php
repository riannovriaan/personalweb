@extends('layouts.app')

@section('content')
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Dashboard Admin </div>
      <div class="list-group list-group-flush">
        <a href="{{ url('/experiences') }}" class="list-group-item list-group-item-action bg-light active">Experiences</a>
        <a href="{{ url('/educations') }}" class="list-group-item list-group-item-action bg-light">Educations</a>
        <a href="{{ url('/abouts') }}" class="list-group-item list-group-item-action bg-light">About Me</a>
        <a href="{{ url('/contacts') }}" class="list-group-item list-group-item-action bg-light">My Contacts</a>
        <a href="{{ url('/portofolios') }}" class="list-group-item list-group-item-action bg-light">My Portofolios</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="tombol-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 margin-tb">
                <div class="float-left">
                    <h2>Educatoins Table</h2>
                </div>
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('educations.create') }}"> Create Education</a>
                </div>
            </div>
        </div>
        
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        
        <table class="table table-bordered">
            <tr>
                <th width="20px" class="text-center">No</th>
                <th>Location</th>
                <th>Description</th>
                <th>Since</th>
                <th width="280px"class="text-center">Action</th>
            </tr>
            @foreach ($educations as $education)
            <tr>
                <td class="text-center">{{ $education->id }}</td>
                <td>{{ $education->loc }}</td>
                <td>{{ $education->description }}</td>
                <td>{{ $education->since }}</td>
                <td class="text-center">
                    <form action="{{ route('educations.destroy',$education->id) }}" method="POST">
        
                        <a class="btn btn-info btn-sm" href="{{ route('educations.show',$education->id) }}">Show</a>
        
                        <a class="btn btn-primary btn-sm" href="{{ route('educations.edit',$education->id) }}">Edit</a>
        
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
@endsection
