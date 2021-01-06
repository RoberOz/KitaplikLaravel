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
                        <table align = "center">
                          {{ method_field('PUT') }}
                          {{ csrf_field() }}
                          <tr height = 35>
                            <td align = "center" width = "115"><label>Kitabın İsmi:</label></td>
                            <td align = "center"><input type="text" name="name" required value="{{$book->name}}"></input></td>
                          </tr>
                          <tr height = 35>
                            <td align = "center"><label>Yazarın İsmi: </label></td>
                            <td align = "center"><input type="text" name="author_name" required value="{{$book->author_name}}"></input></td>
                          </tr>
                          <tr height = 35>
                            <td align = "center"><label>ISBN Numarası: </label></td>
                            <td align = "center"><input type="text" name="isbn_number" required value="{{$book->isbn_number}}"></input></td>
                          </tr>
                          <tr height = 35>
                            <td align = "center" colspan = "2"><button type="submit">Güncelle</button></td>
                          </tr>
                        </table>
                      </form>


                    <div align = "right">
                      <strong><a href={{route('home')}}>Geri Dön</a></strong>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
