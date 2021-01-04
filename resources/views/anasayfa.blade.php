<?php
  use App\Book;

  $books=Book::all();
  //echo $books;
?>
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
                        <td><strong>-Kitap-</strong></td>
                        <td><strong>-Yazar-</strong></td>
                        <td><strong>-ISBN Numarası-</strong></td>
                        <td><strong>-Sil-</strong></td>
                        <td><strong>-Düzenle-</strong></td>
                      </tr>
                      <?php
                        foreach ($books as $book) {
                      ?>
                          <tr>
                            <td> <?php echo $book['name']; ?> </td>
                            <td> <?php echo $book['author_name']; ?> </td>
                            <td> <?php echo $book['isbn_number']; ?> </td>
                          </tr>
                      <?php
                        }
                      ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
