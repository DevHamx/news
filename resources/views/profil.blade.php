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
                                    $totalLikes=0;$totalDislike=0;
                                    foreach($info->rating as $ratingUserEmail => $score){
                                        if ($ratingUserEmail == session('user')->email) {
                                                ?>
                                                <input value="{{$score}}" type="hidden" id="ratingstatus{{$i}}">
                                                <?php
                                            }
                                        else{
                                            ?>
                                            <input value="0" type="hidden" id="ratingstatus{{$i}}">
                                            <?php
                                        }
                                        if ($score==1) {
                                            $totalLikes++;
                                        } else {
                                            $totalDislike--;
                                        }
                                    }
                                    $totalDislike*=-1;
                                ?>
                                <li class="pr-1"><a onclick="rating(1,{{$i}})" href="#like"><span id="totalLikes{{$i}}" class="la la-thumbs-o-up"> {{$totalLikes}}</span></a></li>
                                <li class="pr-1"><a onclick="rating(-1,{{$i}})" href="#dislike"><span class="la la-thumbs-o-down" id="totalDisLikes{{$i}}">  {{$totalDislike}}</span></a></li>
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
                    if (ratingstatus.val()==0) {
                        if (type==1) {
                        var totalLikes = parseInt($('#totalLikes'+newsId).text())+1;
                        $('#totalLikes'+newsId).text(" "+totalLikes);
                        ratingstatus.val(1);
                        } else {
                            var totalDisLikes = parseInt($('#totalDisLikes'+newsId).text())+1;
                        $('#totalDisLikes'+newsId).text(" "+totalDisLikes);
                        ratingstatus.val(-1);
                        }
                    }
                    else{
                        var totalLikes = parseInt($('#totalLikes'+newsId).text());
                        var totalDisLikes = parseInt($('#totalDisLikes'+newsId).text());
                        if (type==1&&ratingstatus.val()==-1) {
                        $('#totalLikes'+newsId).text(" "+(totalLikes+1));
                        $('#totalDisLikes'+newsId).text(" "+(totalDisLikes-1));
                        ratingstatus.val(1);
                        } else if(type==-1&&ratingstatus.val()==1){
                        $('#totalDisLikes'+newsId).text(" "+(totalDisLikes+1));
                        $('#totalLikes'+newsId).text(" "+(totalLikes-1));
                        ratingstatus.val(-1);
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
                success: function(data){
                    if (type==1) {
                        var totalLikes = parseInt($('#totalLikes'+newsId).text())+1;
                        $('#totalLikes'+newsId).text(" "+totalLikes);
                    } else {
                        var totalDisLikes = parseInt($('#totalDisLikes'+newsId).text())+1;
                    $('#totalDisLikes'+newsId).text(" "+totalDisLikes);
                    }
                    
                }
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
                newComment.val("");
            $.ajax({
                url: "/addComents",
                method: "POST",
                data:{
                    url:$('#url'+newsId).text(),
                    comment:newComment.val(),
                },
                success: function(data){
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
