@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">
                  Kitap Oluştur
                  <div align="right">
                    <strong><a href="{{route('home')}}">Geri Dön</a></strong>
                  </div>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="background-color:lightblue">
                        @foreach ($errors->all() as $error) 
                          <li>{{$error}}</li>
                        @endforeach
                    </div>

                      <form method="post" action="{{url('/posts')}}" enctype="multipart/form-data">
                        <table align="center">
                          {{ csrf_field() }}
                          <tr height="35">
                            <td align='center' width = "115"><label>Kitabın İsmi:</label></td>
                            <td ><input type="text" name="name" value="{{old('name')}}" required></input></td>
                          </tr>
                          <tr height="35">
                            <td align="center"><label>Yazarın İsmi: </label></td>
                            <td ><input type="text" name="author_name" value="{{old('author_name')}}" required></input></td>
                          </tr>
                          <tr height="35">
                            <td align="center"><label>ISBN Numarası: </label></td>
                            <td ><input type="text" name="isbn_number" value="{{old('isbn_number')}}" required></input></td>
                          </tr>
                          <tr height="35">
                            <td align="center"><label>Kapak Fotoğrafı: </label></td>
                            <td><input type="file" name="image"></input></td>
                          </tr>
                          <tr height="35">
                            <td align="center"><label>İçerik: </label></td>
                            <td ><textarea name="content" rows="10" cols="60" required>{{ old('content') }}</textarea></td>
                          </tr>
                          <tr height="35">
                            <td align="center" colspan="2"><button type="submit">Oluştur</button></td>
                          </tr>
                        </table>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
