@extends('layouts.main')

@section('title', '一覧')

@section('content')
    <div>
        <h2>クエリパラメーター一覧</h2>
        <ul>
            {{-- Q1-2 --}}
            <li>食べ物：{{ $food }}</li>
            <li>飲み物：{{ $drink }}</li>
        </ul>
    </div>
    {{-- Q2-2 --}}
    <a href="/form/{ routeParam }">次のページへのリンク</a>
@endsection