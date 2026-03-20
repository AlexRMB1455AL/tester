@extends('layouts.main')
@section('content')
<div>
    Home
    <div>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <input type="number" name="provider_id" placeholder="provider_id" min="0"  max="11">
            <input type="number" name="service_id" placeholder="service_id" min="0"  max="11">
            <input type="text" name="total_time" placeholder="total_time">
            <input type="text" name="earnings" placeholder="earnings">
            <input type="text" name="status" placeholder="status">

            <button type="submit">Сохранить</button>
        </form>

    </div>
</div>
@endsection
