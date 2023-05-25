

<div class="comment-area my-5">
    @if ($post->comment && $post->comment->count() > 0)
                            
    <h3 class="mb-4 text-center">{{ $post->comment->count() }}</h3>
    @foreach ($post->comment as $comment)
        
    <div class="comment-area-box media">
        <img alt="" src="images/blog-user-2.jpg" class="img-fluid float-left mr-3 mt-2">

        <div class="media-body ml-4">
            <h4 class="mb-0">{{ $comment->user->name }}</h4>
            <span class="date-comm font-sm text-capitalize text-color"><i
                    class="ti-time mr-2"></i>tanggal segini</span>

            <div class="comment-content mt-3">  
                <p>{{ $comment->comment }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<form action="{{ route('post.comment') }}" method="POST" class="comment-form mb-5 gray-bg p-5" id="comment-form">
    @csrf
    <h3 class="mb-4 text-center">Leave a comment</h3>
    <div class="row">
        <div class="col-lg-12">
            <input type="text" class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
                placeholder="Comment" />
        </div>
        <div class="rate">
            <input type="radio" id="star5" name="rating" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rating" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rating" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rating" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rating" value="1" />
            <label for="star1" title="text">1 star</label>
        </div>
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        {{-- <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"> --}}
        <input type="hidden" name="user_id" value="1">
    </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>

</div>
                        @else
                        <h3 class="mb-4 text-center">No Comments Yet</h3>
                    </div>
                    <form action="{{ route('post.comment') }}" method="POST" class="comment-form mb-5 gray-bg p-5" id="comment-form">
                        @csrf
                        <h3 class="mb-4 text-center">Leave a comment</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
                                    placeholder="Comment" />
                            </div>
                            <div class="rate">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rating" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rating" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rating" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rating" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            {{-- <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"> --}}
                            <input type="hidden" name="user_id" value="1">
                        </div>
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                    </div>
                    @endif