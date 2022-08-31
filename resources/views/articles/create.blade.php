@extends('layouts.app')

@section('content')

    <div class="container">
        <h1> Créer Un Article</h1>
        <div class="row">
            <form action="{{ route('articles.store') }}" method="POST">
                @csrf
                @include('articles.create_fields')
            </form>
        </div>
    </div>

@endsection
