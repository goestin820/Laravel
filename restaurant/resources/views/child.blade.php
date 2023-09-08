<!-- resources/views/child.blade.php -->
@extends('layouts.app')

{{-- 自訂變數名稱 --}}
@section('title', 'Page Title')
@section('title1', 'Page Title')
@section('h2Name', 'h2Name')
@section('title3', 'Page Title')

{{-- 取用父類別內容的用法，複雜不常用 --}}
{{-- @section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')
    {{-- <p>This is my body content.</p> --}}
    <div class="container">
        <div class="row">
            <div class="col">
                123456Test
            </div>
        </div>
    </div>
@endsection
