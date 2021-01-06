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
                      <tr height = 35>
                        <td align = "center"><strong>-Kitap-</strong></td>
                        <td align = "center"><strong>-Yazar-</strong></td>
                        <td align = "center"><strong>-ISBN Numarası-</strong></td>
                      </tr>
                      <?php
                        foreach ($books as $book) {
                      ?>
                          <tr height = 35>
                            <td align = "center"> <?php echo $book->name; ?> </td>
                            <td align = "center"> <?php echo $book->author_name; ?> </td>
                            <td align = "center"height = 35> <?php echo $book->isbn_number; ?> </td>
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
