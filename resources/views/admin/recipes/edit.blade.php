@extends('layouts.main')

@section('content')
    <section style="margin-bottom: 100px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h2>Modifier une recette</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('recipe.update', $recipe->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="title">Titre<span style="color: red">*</span></label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ $recipe->title }}">
                                    <span style="color:red">@error('title') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="content">Contenu<span style="color: red">*</span></label>
                                    <textarea name="content" id="content" class="form-control">{{ $recipe->content }}</textarea>
                                    <span style="color:red">@error('content') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="ingredients">Ingrédients<span style="color: red">*</span></label>
                                    <textarea name="ingredients" id="ingredients" class="form-control">{{ $recipe->ingredients }}</textarea>
                                    <span style="color:red">@error('ingredients') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="price">Prix<span style="color: red">*</span></label>
                                    <input type="text" name="price" id="price" class="form-control" value="{{ $recipe->price }}">
                                    <span style="color:red">@error('price') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <input type="text" name="tags" id="tags" class="form-control" value="{{ old('tags') }}">
                                    <span style="color:red">@error('tags') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="servings">Nombre de personnes</label>
                                    <input type="text" name="servings" id="servings" class="form-control" value="{{ old('servings') }}">
                                    <span style="color:red">@error('servings') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="prep_time">Temps de préparation</label>
                                    <input type="text" name="prep_time" id="prep_time" class="form-control" value="{{ old('prep_time') }}">
                                    <span style="color:red">@error('prep_time') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="cook_time">Temps de cuisson</label>
                                    <input type="text" name="cook_time" id="cook_time" class="form-control" value="{{ old('cook_time') }}">
                                    <span style="color:red">@error('cook_time') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="difficulty">Degré de difficulté</label>
                                    <input type="text" name="difficulty" id="difficulty" class="form-control" value="{{ old('difficulty') }}">
                                    <span style="color:red">@error('difficulty') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <input type="file" name="photo" id="photo" class="form-control">
                                    <span style="color:red">@error('photo') {{ $message }} @enderror</span>
                                </div>
                                <br>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-dark">ENREGISTRER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
