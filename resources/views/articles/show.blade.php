@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm">
        @include('articles.card')
        @include('comments.create')
      </div>
      <div class="col-sm">
        <div class="vh-100" style="overflow-y: auto;">
            @foreach($comments as $i => $comment)
              @include('comments.card')
            @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection