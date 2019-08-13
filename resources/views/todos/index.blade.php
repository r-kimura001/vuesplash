@extends('layouts.app')

@section('content')
<div class="PageContent_main">
    <form action="{{ route('todos.store') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="body">
        <input type="submit" name="" value="Add">
    </form>
    <ul class="todos">
    @forelse( $todos as $todo )
        <li class="todos_item">
            <a href="{{ route('todos.show', ['todo'=>$todo]) }}">{{ $todo->body }}</a>
        </li>
        @empty
        <li>no task.</li>
    @endforelse
    </ul>
</div>
@endsection