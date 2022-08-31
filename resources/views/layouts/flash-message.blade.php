@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

