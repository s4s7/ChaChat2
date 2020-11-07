<div class="row">
    <div class="col-12">
        <div class="card mt-3">
            <div class="card-body pt-0">
                @include('error_card_list')
                <div class="card-text">
                    <form method="POST" action="{{ route('comments.store', $article) }}" id="comment-modal">
                        @include('comments.form')
                        <!-- <button type="submit" class="btn blue-gradient btn-block">投稿する</button> -->
                        <button type="button" class="btn btn-original btn-block" data-toggle="modal" data-target="#modalPush" v-on:click>投稿する</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">注意</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fa-original fas fa-bell fa-4x animated rotateIn mb-4"></i>

        <p>この投稿はあとで修正できません</p>
        <p>本当にこの内容で投稿しますか？</p>
        <!-- <form method="POST" action="{{ route('comments.store', $article) }}"></form> -->

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a type="submit" class="btn modal-btn-original" id="submit_button">Yes</a>
        <a type="button" class="btn modal-btn-outline-original waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

<div src="{{ mix('js/submit_modal.js') }}"></div>
