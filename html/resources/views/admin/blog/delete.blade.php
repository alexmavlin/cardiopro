@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Are you sure you want to delete this blog post?</h4>
                    <form action="{{route('admin.blog.destroy', $data['blog']->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('admin.blog.index') }}" type="button" class="btn btn-light">Go Back</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection