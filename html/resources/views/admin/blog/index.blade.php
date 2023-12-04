@extends('layouts.admin.app')

@section('content')



<div class="content-wrapper">
    <div class="row mb-4">
        @foreach ($data as $item)
            <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
                <div class="card overflow-hidden">
                    <img    src="{{ asset('images/blog') . '/' . $item->img_src }}" 
                            alt="{{$item->img_alt}}"
                            height="200"
                            style="object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title">{{ $item->h1 }}</h4>
                        <p class="card-description">{{ date("d M Y", strtotime($item->date)) }}</p>
                        <p>
                            {!! $item->meta_description !!}
                        </p>
                        
                        <div class="mt-auto">
                            <a href="{{ route('admin.blog.edit', $item->id) }}" type="button" class="btn btn-outline-info btn-fw">Edit</a>
                            <a href="{{ route('admin.blog.delete', $item->id) }}" type="button" class="btn btn-outline-danger btn-fw">Delete</a>
                        </div>
                    </div>
                </div>
            </div>        
        @endforeach
    </div>
    <div class="row justify-content-center">
        {{ $data->links() }}
    </div>
</div>
    
@endsection