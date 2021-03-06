@extends("layouts.app")
@section("content")

<h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route("tasks.show", $task->id, ["id" => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

        {!! link_to_route("tasks.create", "新規タスクの登録", null, ["class" => "btn btn-primary"]) !!}

    <div class="mt-3">
        <ul class="pagination justify-content-center">
            {{ $tasks->render("pagination::bootstrap-4") }}
        </ul>
    </div>
@endsection