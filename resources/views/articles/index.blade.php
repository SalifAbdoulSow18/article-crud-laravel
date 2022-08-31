@extends('layouts.app')

@section('content')

    <section>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1>Liste des Articles</h1>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-md-4 m-4">
                            <a href="{{ route('articles.create') }}" class="btn btn-primary">Ajouter un article</a>
                        </div>
                        <div class="col-md-12">
                            @include('layouts.flash-message')
                        </div>
                        @include('articles.table')
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
