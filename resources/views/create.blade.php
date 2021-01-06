@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Kitap Oluştur</div>

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

                    <form method="post" action="{{url('/posts')}}">
                      {{ csrf_field() }}
                      <label>Kitabın İsmi:</label>
                      <input type="text" name="name" value="{{old('name')}}" required></input>
                      <br>
                      <label>Yazarın İsmi: </label>
                      <input type="text" name="author_name" value="{{old('author_name')}}" required></input>
                      <br>
                      <label>ISBN Numarası: </label>
                      <input type="text" name="isbn_number" value="{{old('isbn_number')}}" required></input>
                      <br>
                      <button type="submit">Oluştur</button>
                    </form>

                    <a href={{route('home')}}>Geri Dön</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
