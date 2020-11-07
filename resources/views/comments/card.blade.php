<div class="card mt-3">
  <div class="card-body d-flex justify-content-between pb-2">
    <div class="font-weight-bold">
      {{ $loop->iteration }} : {{ $comment->user->name }} 弁護士・弁理士
    </div>
    <div class="font-weight-lighter">
      {{ $comment->created_at->format('Y/m/d H:i') }}
    </div>
  </div>
  <div class="card-body pt-0 pb-2">
    <div class="card-text">
        {!! nl2br(e( $comment->body )) !!}
    </div>
  </div>
</div>