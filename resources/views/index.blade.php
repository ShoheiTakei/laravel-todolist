<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo-list</title>
    @vite(['resources/scss/style.scss','resources/js/app.js'])
</head>

<body>
    <h1>Todo-list</h1>
    <div class="add_todos_wrapper">
        <form action="{{route('store')}}" method='POST'>
            @csrf
            <input id="addTOdoInput" name="todo" value="{{old('todo')}}" type="text" placeholder="追加する">
            <button id="addTodoButton">登録</button>
        </form>
        @if (isset($fetch_todos))
        <div class="added_todos_wrapper">
            <ul>
                @foreach ($fetch_todos as $todo)
                @csrf
                <div class="column">
                    <form action="{{route('update',['id'=>$todo->id])}}" method="POST">
                        @csrf
                        <input id="checkTodo" name='checked' type="checkbox" {{ $todo->checked === true ? 'checked' : '' }}>
                        <input class="text_todo_field" type="text" value="{{$todo->todo}}">
                        <button>保存</button>
                    </form>
                    <form action="{{route('destroy',['id'=>$todo->id])}}" method="POST">
                        @csrf
                        <button>削除</button>
                    </form>
                </div>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</body>

</html>