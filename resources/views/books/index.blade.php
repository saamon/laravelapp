{{--テンプレートに埋め込み--}}
@php
    $colors = [
        'PHP' => 'bg-primary',
        'Laravel' => 'bg-danger',
        'JavaScript' => 'bg-warning text-dark',
        'Database' => 'bg-success',
        'Web開発' => 'bg-info text-dark',
    ];
@endphp
@vite('resources/js/app.jsx')

<x-layout>
    <p>
        <a href="{{ route('books.create') }}" class="btn btn-primary">
            新規登録
        </a>
    </p>
    <form method="post" action="{{ route('query.update-all') }}">
        @csrf
        @method('PATCH')

        <button type="submit" class="btn btn-warning">
            SBクリエイティブの価格を10%引きにする
        </button>
    </form>
    <table class="table">
        <thread>
            <tr>
                <th>ISBNコード</th>
                <th>署名</th>
                <th>価格</th>
                <th>出版社</th>
                <th>刊行日</th>
                <th>サンプル</th>
                <th>操作</th>
                <th>レビュー数</th>
                <th>カテゴリー</th>
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
                <td>{{$book->reviews->count()}} 件</td>
                <td>
                    @forelse($book->categories as $category)
                        <span class="badge {{ $colors[$category->name] ?? 'bg-secondary' }}">
                            {{$category->name}}
                        </span>
                    @empty
                        <span class="text-muted">未設定</span>
                    @endforelse
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
