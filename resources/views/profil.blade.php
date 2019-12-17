@extends('layouts.app')
@section('content')
@include('partials.messages')
<section id="user-feed">
        <div class="row">
            <a style="margin-bottom: 1.5em" href="/create" class="btn btn-success">create News</a><br>
            @if ($userEmail!=session('user')->email)
            <a id="addfirend" onclick="addFriend('{{$userEmail}}');" href="#addFriend" style="margin-left: 1.5em;margin-bottom: 1.5em" class="btn btn-info">add Friend</a><br>
            @endif
        </div>
    <div class="row">
            <?php $n=0;
            for ($i=0 ;$i < sizeof($newsList) ; $i++) {
                $news = $newsList[$i];
                $info = $news->info;
                $comments = $info->comments;
            if ($n==3){
            ?>
            </div>
            <div class="row">
                <?php $n=0;}?>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="card border-grey border-lighten-2">
                <div class="card-header">
                <h4 id="url{{$i}}" class="card-title"><a target="_blank" href="{{$news->url}}">{{$news->url}}</a></h4>
                    <p class="card-subtitle text-muted mb-0 pt-1">
                            <span class="font-small-3"><span id="date_ajouter{{$i}}">{{$info->date_ajouter}}</span> By : <span id="authorEmail{{$i}}">{{$userEmail}}</span></span>
                    </p>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    
                </div>
                <div class="card-content">
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">{!!$info->titre!!}</p>
                            <ul class="list-inline">
                                <?php
                                $totalLikes=0;$totalDislike=0;$rated=0;
                                foreach($info->rating as $ratingUserEmail => $score){
                                    if ($ratingUserEmail == session('user')->email) {
                                            if ($score==1) {
                                                $rated=1;
                                            }
                                            else{
                                                $rated=-1;
                                            }
                                        }
                                    if ($score==1) {
                                        $totalLikes++;
                                    } else {
                                        $totalDislike--;
                                    }    
                                }
                                $totalDislike*=-1;
                                
                                if ($rated==1) {
                                    ?>
                                    <li class="pr-1"><a onclick="rating(1,{{$i}})" href="#like1"><span id="totalLikes{{$i}}" class="la icon-like"> {{$totalLikes}}</span></a></li>
                                    <li class="pr-1"><a onclick="rating(-1,{{$i}})" href="#dislike"><span class="la la-thumbs-o-down" id="totalDisLikes{{$i}}">  {{$totalDislike}}</span></a></li>
                                    <?php
                                }
                                else if($rated==-1){
                                    ?>
                                    <li class="pr-1"><a onclick="rating(1,{{$i}})" href="#like2"><span id="totalLikes{{$i}}" class="la la-thumbs-o-up"> {{$totalLikes}}</span></a></li>
                                    <li class="pr-1"><a onclick="rating(-1,{{$i}})" href="#dislike"><span class="la icon-dislike" id="totalDisLikes{{$i}}">  {{$totalDislike}}</span></a></li>
                                    <?php
                                }
                                else{
                                    ?>
                                    <li class="pr-1"><a onclick="rating(1,{{$i}})" href="#like2"><span id="totalLikes{{$i}}" class="la la-thumbs-o-up"> {{$totalLikes}}</span></a></li>
                                    <li class="pr-1"><a onclick="rating(-1,{{$i}})" href="#dislike"><span class="la la-thumbs-o-down" id="totalDisLikes{{$i}}">  {{$totalDislike}}</span></a></li>
                                    <?php
                                }
                                ?>
                                <input value="{{$rated}}" type="hidden" id="ratingstatus{{$i}}">
                                <li data-toggle="collapse" data-target="#commentsDiv{{$i}}" class="pr-1"><a href="#comment" class=""><span id="totalComment{{$i}}" class="la la-commenting-o"> {{sizeof($comments)}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="commentsDiv{{$i}}" class="card-footer px-0 py-0 collapse">
                            @foreach ($comments as $comment)
                        <div class="card-body">
                            <div class="media">
                                    <div class="media-body">
                                        <p class="text-bold-600 mb-0"><a href="/profil/{{$comment->userEmail}}">{{$comment->userEmail}}</a></p>
                                        <p>{{$comment->comment}}</p>
                                        <p class="card-subtitle text-muted mb-0 pt-1"><span class="font-small-2" style="float: right">{{$comment->date}}</span></p>
                                    </div>
                                </div> 
                        </div>
                        @endforeach
                    <div id="addCommentField{{$i}}" class="card-body">
                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <form method="POST" onsubmit="addComment({{$i}});return false;">
                                            @csrf
                                    <input id="comment{{$i}}" name="comment" type="text" class="form-control" placeholder="Write comments...">
                                    </form>
                                <div class="form-control-position">
                                    <i class="la la-dashcube"></i>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>               
        <?php $n++;}?>
    </div>
</section>
@push('scripts')
    <script>
        function rating(type,newsId) {
            if (type!=1&&type!=-1) {
                alert("nice move noob :)");
            }
            else{
                var ratingstatus = $('#ratingstatus'+newsId);
                var totalLikes = $('#totalLikes'+newsId);
                var totalDisLikes = $('#totalDisLikes'+newsId);
                    if (ratingstatus.val()==0) {
                        if (type==1) {
                        $('#totalLikes'+newsId).text(" "+(parseInt(totalLikes.text())+1));
                        ratingstatus.val(1);
                        totalLikes.removeClass('la-thumbs-o-up').addClass('icon-like');
                        } else {
                        $('#totalDisLikes'+newsId).text(" "+(parseInt(totalDisLikes.text())+1));
                        ratingstatus.val(-1);
                        totalDisLikes.removeClass('la-thumbs-o-down').addClass('icon-dislike');
                        }
                    }
                    else{
                        if (type==1&&ratingstatus.val()==-1) {
                        $('#totalLikes'+newsId).text(" "+(parseInt(totalLikes.text())+1));
                        $('#totalDisLikes'+newsId).text(" "+(parseInt(totalDisLikes.text())-1));
                        ratingstatus.val(1);
                        totalLikes.removeClass('la-thumbs-o-up').addClass('icon-like');
                        totalDisLikes.removeClass('icon-dislike').addClass('la-thumbs-o-down');
                        } else if(type==-1&&ratingstatus.val()==1){
                        $('#totalDisLikes'+newsId).text(" "+(parseInt(totalDisLikes.text())+1));
                        $('#totalLikes'+newsId).text(" "+(parseInt(totalLikes.text())-1));
                        ratingstatus.val(-1);
                        totalDisLikes.removeClass('la-thumbs-o-down').addClass('icon-dislike');
                        totalLikes.removeClass('icon-like').addClass('la-thumbs-o-up');
                        }
                    }
                $.ajax({
                url: "/rateNews",
                method: "POST",
                data:{
                    url:$('#url'+newsId).text(),
                    authorEmail:$('#authorEmail'+newsId).text(),
                    date_ajouter:$('#date_ajouter'+newsId).text(),
                    rating:type

                },
                });
            }
        }

        function addComment(newsId) {
            var commentDivParent=$('#commentsDiv'+newsId);
            var newComment = $('#comment'+newsId);
            var userEmail = {!! json_encode(session('user')->email)!!};
            var newCommentDiv = '<div class="card-body">'
                +'<div class="media">'
                +'<div class="media-body">'
                +'<p class="text-bold-600 mb-0"><a href="/profil/'+userEmail+'">'+userEmail+'</a></p>'
                +'<p>'+newComment.val()+'</p>'
                +'<p class="card-subtitle text-muted mb-0 pt-1"><span class="font-small-2" style="float: right">'+new Date($.now())+'</span></p>'
                +'</div>'
                +'</div> '
                +'</div>';
                commentDivParent.prepend(newCommentDiv);
            $.ajax({
                url: "/addComents",
                method: "POST",
                data:{
                    url:$('#url'+newsId).text(),
                    comment:newComment.val(),
                },
                success: function(data){
                newComment.val("");
                var comments = parseInt($('#totalComment'+newsId).text())+1;
                $('#totalComment'+newsId).text(" "+comments);
                }
                });
        }

        function addFriend(friendEmail) {
            $.ajax({
                url: "/addFriend",
                method: "POST",
                data:{
                    friendEmail:friendEmail,
                },
                success: function(data){
                    $('#addfirend').hide();
                }
                });
        }
    </script>
@endpush
@endsection
