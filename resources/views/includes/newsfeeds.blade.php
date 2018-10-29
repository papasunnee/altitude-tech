<h4>Latest News</h4>
<ul class="timeline">
@foreach (App\Models\Post::orderBy('id', 'desc')->limit(3)->get() as $post)
    <li>
        <a href="#" style="display:block">{{$post->title}}</a>
        <small class="float-right" style="color:royalblue">
        {{$post->created_at->diffForHumans()}}
        </small>
        <div class="clearfix"></div>
        <p>{{str_limit($post->body,150)}}</p>
    </li>
@endforeach

</ul>

