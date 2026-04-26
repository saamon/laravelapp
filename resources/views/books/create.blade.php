<x-layout title="書籍情報フォーム(新規)">
    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="isbn">ISBNコード：</label>
            <input type="text" name="isbn" id="isbn" class="form-control"
                   value="{{ old('isbn',$book->isbn) }}">
        </div>
        <div class="form-group">
            <label for="title">書籍タイトル：</label>
            <input type="text" name="title" id="title" class="form-control"
                   value="{{ old('title',$book->title) }}">
        </div>
        <div class="form-group">
            <label for="price">価格：</label>
            <input type="number" name="price" id="price" class="form-control"
                   value="{{ old('price',$book->price) }}">
        </div>
        <div class="form-group">
            <label for="publisher">出版社：</label>
            <input type="text" name="publisher" id="publisher" class="form-control"
                   value="{{ old('publisher',$book->publisher) }}">
        </div>
        <div class="form-group">
            <label for="published">刊行日：</label>
            <input type="date" name="published" id="published" class="form-control"
                   value="{{ old('published',$book->published) }}">
        </div>
        <div class="form-group">
            <label for="sample">サンプル：</label>
            <input name="sample" type="hidden" value="0"/>
            <input name="sample" id="sample" type="checkbox" value="1"
                @checked(old('sample',$book->sample)) />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">登録</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">
                一覧に戻る
            </a>
        </div>
    </form>
</x-layout>
