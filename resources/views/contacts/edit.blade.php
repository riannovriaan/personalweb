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
                    <h2>Edit Contact</h2>
                </div>
                <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('contacts.index') }}"> Back</a>
                </div>
            </div>
        </div>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('contacts.update',$contact->id) }}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email Link:</strong>
                        <input type="text" name="email_link" value="{{ $contact->email_link }}" class="form-control" placeholder="Email Link">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <textarea class="form-control" style="height:150px" name="email" placeholder="Email">{{ $contact->email }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Insta Link:</strong>
                        <input type="text" name="insta_link" value="{{ $contact->insta_link }}" class="form-control" placeholder="Insta Link">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Insta:</strong>
                        <textarea class="form-control" style="height:150px" name="insta" placeholder="Insta">{{ $contact->insta }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Work Time:</strong>
                        <textarea class="form-control" style="height:150px" name="work" placeholder="Work Time">{{ $contact->work }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
    
        </form>
    </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
@endsection