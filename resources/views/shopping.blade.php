@extends('layouts.format')

@section('main')
<h1>shopping</h1>
<h1>shopping</h1>
<h1>shopping</h1>
<h1>shopping</h1>
<h1>shopping</h1>
<h1>shopping</h1>
<h1>shopping</h1>
<h1>shopping</h1>
<h1>shopping</h1>
<h1>shopping</h1>
<h1>shopping</h1>
<h1>shopping</h1>

@if (Auth::check())
<p>ログイン中ユーザー: {{$user->name . ' メール' . $user->email . ''}}</p>
@else
<p>ログインしてください。（<a href="/login">ログイン</a>｜
  <a href="/register">登録</a>）</p>
@endif

@endsection