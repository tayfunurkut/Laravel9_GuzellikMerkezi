@if ($message = Session::get('success'))
    <div class="alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if ($message = Session::get('any'))
    <div class="alert-danger ">
        <button type="button" class="close" data-dismiss="alert">x</button>
        Check the following errors :(
    </div>
@endif
