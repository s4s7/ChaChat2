@extends('app')

@section('title', '記事一覧')
@section('content')
  @include('nav')
  <div class="container">

    <form class="form-inline mt-3">
      <i class="fas fa-search" aria-hidden="true"></i>
      <input class="form-control form-control-sm ml-3 w-25" type="text" placeholder="議題を検索" aria-label="Search">
    </form>
    @foreach($articles as $article)
      @include('articles.card')
    @endforeach
  </div>
@endsection
