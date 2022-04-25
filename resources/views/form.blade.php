@extends('layouts.main')

@section('title', 'フォーム')

@section('content')
    {{-- Q3-2 --}}
    <form action="" method="POST">
        <div>
            <label>ルートパラメーター</label>
            {{-- Q2-3 --}}
            <input type="text" name="data" value="">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
@endsection