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

                  <!-- Canonical -->
                  <div class="form-group">
                    <label for="canonical">Canonical:</label>
                    @error('canonical')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input  name="canonical" 
                            type="text" 
                            class="form-control" 
                            id="canonical" 
                            placeholder="Canonical">
                  </div>
                  <!-- // Canonical -->

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
                  <div class="template-demo" id="file-types-selector">
                    <button type="button" class="btn btn-inverse-primary btn-fw">IMG</button>
                    <button type="button" class="btn btn-inverse-primary btn-fw">Video</button>
                  </div>
                  <!-- // IMG and Video Uploader -->


                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
    
@endsection