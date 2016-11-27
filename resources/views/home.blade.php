@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 animated fadeInLeft">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dobrodošao {{ Auth::user()->name}}e
                </div>
                <div class="panel-body">
                    <form action="{{ route('post.store') }}" method="POST">
                        <label for="post">Novi note?</label>
                        <div class="form-group">
                            <textarea name="post" id="new_post" rows="2"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Dodaj</button>
                        <input type="hidden" value="{{Session::token()}}" name="_token">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 animated fadeInRight">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Notes:
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        @if($posts)
                            @foreach($posts as $post)
                                    <div class="col-md-12 post-body">
                                        {{ $post->post }}
                                    </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
