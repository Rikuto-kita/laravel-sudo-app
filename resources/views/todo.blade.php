<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h1>Todoリスト</h1>
    <form action="{{ route('store') }}" method="POST">
    @csrf
      <input type="text" name="name" id="name" placeholder="Todoを追加" required />
      <input type="submit" value="追加" />
    </form>
    <ul>
        @foreach ($todos as $todo)
            <li>
            <form action="{{ route('update', $todo->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('PUT')
              @if(!$todo->is_result)
                <input type="checkbox" name="is_result" />
              @else
                <input type="checkbox" name="is_result" checked />
              @endif
                <input type="text" name="name" value="{{ $todo->name }}" style="border: none; background-color: transparent;">
                <button type="submit">編集</button>
              </form>
              <form action="{{ route('destroy', $todo->id) }}" method="POST" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit">削除</button>
              </form>
            </li>
        @endforeach
    </ul>


</body>

</html>