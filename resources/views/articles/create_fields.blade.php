<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title"></label>
            <input type="text" name="title" placeholder="Article Title" value="{{ old('title') }}" class="form-control">
            @if ($errors->has('title'))
                <div class="alert alert-danger">
                    {{ $errors->first('title') }}
                </div>
            @endif

        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="content"></label>
            <textarea type="text" name="content" placeholder="Article Content" value="{{ old('content') }}" class="form-control"></textarea>
            @if ($errors->has('content'))
                <div class="alert alert-danger">
                    {{ $errors->first('content') }}
                </div>
            @endif
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary"> Ajouter </button>&nbsp;
        <a href="{{ route('articles.index') }}" class="btn btn-danger">Retour</a>
    </div>

</div>


