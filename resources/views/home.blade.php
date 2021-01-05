<?php
  //die(var_dump($books));

  //foreach ($books as $book) {
    //echo $book; echo '<br>';

    //echo $book['name']; echo '<br>';
    //echo $book['author_name']; echo '<br>';
    //echo $book['isbn_number']; echo '<br>';
  //}
  //die;
?>


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Kitaplık</div>

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
                        <td></td>
                        <td><strong>-Düzenle-</strong></td>
                      </tr>
                      <?php
                        foreach ($books as $book) {
                      ?>
                          <tr>
                            <td> <?php echo $book->name; ?> </td>
                            <td> <?php echo $book->author_name; ?> </td>
                            <td> <?php echo $book->isbn_number; ?> </td>

                            <td>
                                <button class="js-delete-book-btn"  data-id={{$book->id}}>Kitabı Sil</button>

                            </td>
                            <td>Düzenle</td>
                          </tr>
                      <?php
                        }
                      ?>
                    </table>
                </div>
            </div>
                                <a href="posts/" align="middle">Ekle</a>
        </div>
    </div>
</div>
@endsection

@push('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<script>
    $('.js-delete-book-btn').on('click', function () {
        let bookId = $(this).attr("data-id");
        console.log(bookId);
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: '{{ url('/posts/')}}/'+bookId,
            method: 'delete',
            success: location.reload()
        });
    });
</script>
@endpush
