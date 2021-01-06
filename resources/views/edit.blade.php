@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Kitap Güncelle</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="background-color:lightblue">
                      <?php
                        foreach ($errors->all() as $error) {
                      ?>
                          <li>{{$error}}</li>
                      <?php
                        }
                      ?>
                    </div>

                    <form method="post" action="{{url('/posts',$book->id)}}">
                      {{ method_field('PUT') }}
                      {{ csrf_field() }}
                      <label>Kitabın İsmi:</label>
                      <input type="text" name="name" required value="{{$book->name}}"></input>
                      <br>
                      <label>Yazarın İsmi: </label>
                      <input type="text" name="author_name" required value="{{$book->author_name}}"></input>
                      <br>
                      <label>ISBN Numarası: </label>
                      <input type="text" name="isbn_number" required value="{{$book->isbn_number}}"></input>
                      <br>
                      <button type="submit">Güncelle</button>
                    </form>

                    <a href={{route('home')}}>Geri Dön</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
