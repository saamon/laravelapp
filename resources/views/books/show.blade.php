<x-layout title="書籍詳細">
    <dl class="row">
        <dt class="col-sm-2">
            ISBNコード
        </dt>
        <dd class="col-sm-10">
            {{ $book->isbn }}
        </dd>
        <dt class="col-sm-2">
            書名
        </dt>
        <dd class="col-sm-10">
            {{ $book->title }}
        </dd>
        <dt class="col-sm-2">
            価格
        </dt>
        <dd class="col-sm-10">
            {{ Number::currency($book->price,in:'JPY') }}
        </dd>
        <dt class="col-sm-2">
            出版社：
        </dt>
        <dd class="col-sm-10">
            {{ $book->publisher }}
        </dd>
        <dt class="col-sm-2">
            刊行日：
        </dt>
        <dd class="col-sm-10">
            {{ $book->published->format('Y年m月d日') }}
        </dd>
        <dt class="col-sm-2">
            サンプル：
        </dt>
        <dd class="col-sm-10">
            {{ $book->sample ? 'あり':'なし' }}
        </dd>
    </dl>
    <div>
        <a href="{{ route('books.index', $book) }}" class="btn btn-secondary">一覧に戻る</a>
    </div>
</x-layout>
