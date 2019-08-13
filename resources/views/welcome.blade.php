@extends('layouts.app')
@section('content')
    <div class="PageContent">
        <div class="PageContent_main">
            <ul class="appMenu">
                <li class="appMenu_item">
                    <a href="{{ route('todos.index') }}" class="appMenu_link"><span class="appMenu_linkText">ToDoアプリ</span></a>
                </li>
                <li class="appMenu_item">
                    <a href="./" class="appMenu_link"><span class="appMenu_linkText">アプリ２</span></a>
                </li>
                <li class="appMenu_item">
                    <a href="./" class="appMenu_link"><span class="appMenu_linkText">アプリ３</span></a>
                </li>
                <li class="appMenu_item">
                    <a href="./" class="appMenu_link"><span class="appMenu_linkText">アプリ４</span></a>
                </li>
                <li class="appMenu_item">
                    <a href="./" class="appMenu_link"><span class="appMenu_linkText">アプリ５</span></a>
                </li>
                <li class="appMenu_item">
                    <a href="./" class="appMenu_link"><span class="appMenu_linkText">アプリ６</span></a>
                </li>
            </ul>
        </div>
    </div>
@endsection