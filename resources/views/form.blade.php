@extends('layouts.main')

@section('title', 'フォーム')

@section('content')
    {{-- Q3-2 --}}
    <form action="/create" method="POST">
        @csrf
        <div>
            <label>ルートパラメーター</label>
            {{-- Q2-3 --}}
            <input type="text" name="data" value="{{ $routeParam }}">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
@endsection