@extends('backend.master')

@section('title')
    Edit Author
@endsection

@push('css') 

@endpush

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header right m-r-10">
            <a href="{{ route('admin.allauthors.index')}}" class="btn btn-success waves-effecr">
                <i class="material-icons">toc</i>
                <span>All Authors</span>
            </a>
        </div>
        <ol class="breadcrumb breadcrumb-bg-blue">
            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
            <li class="active"><i class="material-icons">library_books</i> Edit Author</li>
        </ol>
        <!-- Create Tag Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Author
                        </h2> 
                    </div>
                    <div class="body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('admin.allauthors.update', $author->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-float">
                                <div class="form-line">
                                <input type="text" name="name" class="form-control" value="{{ $author->name }}">
                                    <label class="form-label">Author Name</label>
                                </div>
                            </div> 
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="username" class="form-control" value="{{ $author->username }}">
                                    <label class="form-label">Author Userame</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="email" name="email" class="form-control" value="{{ $author->email }}">
                                    <label class="form-label">Email</label>
                                </div>
                            </div> 
                            
                            <h2 class="card-inside-title">Select Role</h2>
                            <div class="demo-radio-button">
                                <input type="radio" id="radio_1" class="radio-col-light-blue" name="role_id" value="2" {{ $author->role_id == 2 ? 'checked': ''}}>
                                <label for="radio_1">Author</label>
                                <input type="radio" id="radio_2" class="radio-col-light-blue" name="role_id" value="1" {{ $author->role_id == 1 ? 'checked': ''}}>
                                <label for="radio_2">Admin</label> 
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Create Tag Table -->
    </div>
</section>
@endsection

@push('js') 

@endpush