@extends("layouts.app")

@section("content")

    @if(Auth::check())
        @include("tasks.index", ["tasks" => $tasks])
    @else
        <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasklist</h1>
            <div class="mt-4">
                {!! link_to_route("signup.get", "ユーザー登録", [], ["class" => "btn btn-lg btn-primary"]) !!}
            </div>
        </div>
    </div>
    @endif
@endsection