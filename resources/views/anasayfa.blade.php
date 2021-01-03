@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Ana Sayfa</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table width = 100%>
                      <tr>
                        <td><strong>Kitap</strong></td>
                        <td><strong>Yazar</strong></td>
                        <td><strong>ISBN Numarası</strong></td>
                        <td><strong>Kapak Fotoğrafı</strong></td>
                      </tr>
                      <tr>
                        <td>Ana Sayfa!!</td>
                        <td>Ana Sayfa!!</td>
                        <td>Ana Sayfa!!</td>
                        <td>Ana Sayfa!!</td>
                      </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
