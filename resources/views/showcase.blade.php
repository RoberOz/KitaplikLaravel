@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div align="right">
                    <strong><a href={{route('home')}}>Geri Dön</a></strong>
                  </div>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 align="center"><strong> <?php echo $book->name; ?> </strong></h3>
                    <h4 align="center"><strong> <?php echo $book->author_name; ?> </strong></h4>

                    @if(isset($book->image))
                      <div align="center">
                        <img align="center" src="{{asset($book->image)}}" width="150">
                      </div>
                    @endif

                    <br>
                    <div>
                      <p><?php echo $book->content; ?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
