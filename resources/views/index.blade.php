<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo-list</title>
    @vite(['resources/scss/style.scss'])
</head>

<body>
    <h1>Todo-list</h1>
    <div class="add_todos_wrapper">
        <form action="{{route('created_todo')}}" method='post'>
            @csrf
            <input name="todo" type="text" placeholder="追加する">
            <button>登録</button>
        </form>
        @if (isset($fetch_todos))
            <div class="added_todos_wrapper">
                {{-- <form action="{{route('updated_todo')}}" method="POST"> --}}
                    @csrf
                    <ul>
                        @foreach ($fetch_todos as $todo)
                        <div class="column">
                            <input name='checked' type="checkbox">
                            <li>{{$todo->todo}}</li>
                            <button name='deleted'>削除</button>
                        </div>
                        @endforeach
                    </ul>
                    {{--
                </form> --}}
            </div>
        @endif
    </div>
</body>

</html>