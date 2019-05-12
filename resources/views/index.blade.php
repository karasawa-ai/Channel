@extends('loayots.default')

@section('title', '掲示板')

@section('header')
<p>現在の投稿<span>{{ $users->count() }}</span>件</p>
<h2><a href="{{ url('/create') }}">投稿する</a></h2>
@endsection


@section('content')
<dl>
  @forelse ($users as $user)
  <div class="posts">
    <dt>
      <span>1</span><span>名前: {{ $user->name }}</span>
      <span>{{ $user->created_at }}</span><br>
    </dt>
    <dd>
               {!! nl2br(e($user->body)) !!}
               <a href="{{ action('PagesController@confirm', $user->id) }}">削除</a>
           </dd>
       </div><!-- posts -->
       @empty
           <p>まだ投稿はありません。</p>
       @endforelse
       </dl>
       @if ($users->count() > 5)
       <button id="load_more">全件表示</button>
       @endif
   @endsection
