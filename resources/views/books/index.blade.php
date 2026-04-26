{{--テンプレートに埋め込み--}}
<x-layout>
    <p>
        <a href="{{ route('books.create') }}" class="btn btn-primary">
            新規登録
        </a>
    </p>
    <table class="table">
        <thread>
            <tr>
                <th>ISBNコード</th>
                <th>署名</th>
                <th>価格</th>
                <th>出版社</th>
                <th>刊行日</th>
                <th>サンプル</th>
            </tr>
        </thread>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{$book->isbn}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->publisher}}</td>
                <td>{{$book->published}}</td>
                <td>{{$book->sample ? '○' : '×'}}</td>
                <td>
                    <a href="{{ route('books.show',$book->id) }}">詳細</a>
                    <a href="{{ route('books.edit',$book->id) }}">編集</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
