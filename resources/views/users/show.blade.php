@extends('app')

@section('title', $user->name)

@section('content')
  @include('nav')
  <div class="container">
    <div class="card mt-3">
      <div class="card-body pb-0">
        <div class="d-flex flex-row">
          <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
          </a>
        </div>
        <div class="h5 card-title m-0">
          <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
            {{ $user->name }}
          </a>
        </div>
      </div>
      <div class="card-body text-muted">
        <p class="mb-2"><i class="far fa-envelope pr-2"></i>example@gmail.com</p>
        <p class="mb-3"><i class="fa fa-briefcase pr-2"></i>デザイナー</p>
        <p class="text-muted card-text">
            〜〜会社で主にLPのデザインを担当してます。
            デザイナー歴10年
        </p>
      </div>
    </div>
  </div>
@endsection