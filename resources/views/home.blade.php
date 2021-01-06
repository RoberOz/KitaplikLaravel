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
                <div align="center" class="panel-heading">Kitaplık</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table width=100%>
                      <tr height=35>
                        <td align="center"></td>
                        <td align="center"><strong>-Kitap-</strong></td>
                        <td align="center"><strong>-Yazar-</strong></td>
                        <td align="center"><strong>-ISBN Numarası-</strong></td>
                        <td align="center"></td>
                        <td align="center"><strong></strong></td>
                      </tr>
                        @foreach ($books as $book)
                          <tr height="120">
                            <td align="center">
                              @if(isset($book->image))
                                <img align="center" src="{{asset($book->image)}}" width="75">
                              @endif
                            </td>
                            <td align="center"> <?php echo $book->name; ?> </td>
                            <td align="center"> <?php echo $book->author_name; ?> </td>
                            <td align="center"> <?php echo $book->isbn_number; ?> </td>

                            <td align="center">
                              <button onclick="location.href='{{route('posts.show',$book->id)}}'">Görüntüle</button>
                            </td>

                            <td align="center">
                              <button onclick="location.href='{{route('posts.edit',$book->id)}}'">Düzenle</button>
                            </td>

                            <td align="center">
                              <button class="js-delete-book-btn"  data-id={{$book->id}}>Kitabı Sil</button>
                            </td>
                          </tr>
                        @endforeach
                    </table>

                </div>
            </div>
              <div align="center">
                <button onclick="location.href='posts/create'">Ekle</button>
              </div>
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
