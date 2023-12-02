@extends('layouts.admin.app')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Create New Post</h4>
                <p class="card-description">
                  @foreach ($data['breadcrumbs'] as $item)
                      <a href="{{$item['url']}}">{{$item['name']}}</a>
                  @endforeach
                </p>
                <form class="forms-sample">

                  <!-- URL Input -->
                  <div class="form-group">
                    <label for="url">Custom URL (example: /defibrillator_for_sale):</label>
                    @error('url')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input  name="url" 
                            type="text" 
                            class="form-control" 
                            id="url" 
                            placeholder="Custom URL">
                  </div>
                  <!-- // URL Input -->

                  <!-- Balise Title -->
                  <div class="form-group">
                    <label for="title">Balise title:</label>
                    @error('title')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input  name="title" 
                            type="text" 
                            class="form-control" 
                            id="title" 
                            placeholder="Balise Title">
                  </div>
                  <!-- // Balise Title -->

                  <!-- Meta Description -->
                  <div class="form-group">
                    <label for="meta_description">Meta description:</label>
                    @error('meta_description')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input  name="meta_description" 
                            type="text" 
                            class="form-control" 
                            id="meta_description" 
                            placeholder="Meta Description">
                  </div>
                  <!-- // Meta Description -->

                  <!-- Meta Keywords -->
                  <div class="form-group">
                    <label for="meta_keywords">Meta Keywords :</label>
                    @error('meta_keywords')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input  name="meta_keywords" 
                            type="text" 
                            class="form-control" 
                            id="meta_keywords" 
                            placeholder="Meta Keywords">
                  </div>
                  <!-- Meta Keywords -->

                  <!-- Date de création -->
                  <div class="form-group">
                    <label for="meta_keywords">Date de création :</label>
                    @error('meta_keywords')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input  name="meta_keywords" 
                            type="date" 
                            class="form-control" 
                            id="meta_keywords" 
                            placeholder="">
                  </div>
                  <!-- // Date de création -->

                  <!-- Auteur -->
                  <div class="form-group">
                    <label for="author">Auteur :</label>
                    @error('author')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input  name="author" 
                            type="text" 
                            class="form-control" 
                            id="author" 
                            placeholder="Auteur">
                  </div>
                  <!-- // Auteur -->

                  <!-- Breadcrumb -->
                  <div class="form-group">
                    <label for="breadcrumb">Breadcrumb :</label>
                    @error('breadcrumb')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input  name="breadcrumb" 
                            type="text" 
                            class="form-control" 
                            id="breadcrumb" 
                            placeholder="Breadcrumb">
                  </div>
                  <!-- // Breadcrumb -->

                  <!-- Titre H2 en haut de page -->
                  <div class="form-group">
                    <label for="h2">Titre H2 en haut de page:</label>
                    @error('h2')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input  name="h2" 
                            type="text" 
                            class="form-control" 
                            id="h2" 
                            placeholder="Titre H2 en haut de page">
                  </div>
                  <!-- // Titre H2 en haut de page -->

                  <!-- IMG and Video Uploader -->
                  <div class="form-group">
                    <label for="img_src">IMG:</label>
                    @error('img_src')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="file" name="img_src" class="form-control" id="img_src">
                  </div>
                  <!-- // IMG and Video Uploader -->

                  <!-- IMG Alt -->
                  <div class="form-group">
                    <label for="img_alt">IMG Alt:</label>
                    @error('img_alt')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input  name="img_alt" 
                            type="text" 
                            class="form-control" 
                            id="img_alt" 
                            placeholder="IMG Alt">
                  </div>
                  <!-- // IMG Alt -->

                  <!-- Titre H1 sous l'image -->
                  <div class="form-group">
                    <label for="h1">Titre H1 sous l'image :</label>
                    @error('h1')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input  name="h1" 
                            type="text" 
                            class="form-control" 
                            id="h1" 
                            placeholder="Post Title">
                  </div>
                  <!-- // Titre H1 sous l'image -->

                  <!-- Content -->
                  @for($i = 1; $i <= 10; $i++)

                  <div class="form-group">
                    <label for="h3_{{$i}}">H3-{{$i}} :</label>
                    @error('h3_{{$i}}')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input  name="h3_{{$i}}" 
                            type="text" 
                            class="form-control" 
                            id="h3_{{$i}}" 
                            placeholder="Balise H3">
                  </div>

                  <div class="form-group">
                    <label for="p_{{$i}}">p-{{$i}} :</label>
                    @error('p_{{$i}}')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <textarea name="p_{{$i}}" id="p_{{$i}}" class="form-control" rows="10"></textarea>
                  </div>

                  @endfor
                  <!-- // Content -->


                  <button type="submit" class="btn btn-primary mr-2">Post</button>
                  <a href="{{ route('admin.blog.create') }}" class="btn btn-light">Discard</a>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
    
@endsection