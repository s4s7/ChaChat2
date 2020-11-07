<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
  protected $fillable = [
      'title',
      'body',
  ];
  public function user(): BelongsTo
  {
      return $this->belongsTo('App\User');
  }

  //----------------------------------------------------------------------------
  public function likes(): BelongsToMany
  {
      // 第一引数;関係するモデル、第二引数;中間モデル
      return $this->belongsToMany('App\User', 'likes')->withTimestamps();
  }

  public function isLikedBy(?User $user): bool
  {
      return $user
          ? (bool)$this->likes->where('id', $user->id)->count()
          : false;
  }

  // いいね数算出
  public function getCountLikesAttribute(): int
  {
      return $this->likes->count();
  }
  //----------------------------------------------------------------------------


  public function comments(): BelongsToMany
  {
      // 第一引数;関係するモデル、第二引数;中間モデル
      return $this->belongsToMany('App\User', 'comments')->withTimestamps();
  }

  // アクセサはget...Attributeという形式となっている
  // これでcount_commentsというメソッドが使えるようになる
  // コメント数算出
  public function getCountCommentsAttribute(): int
  {
    return $this->comments->count();
  }
}
