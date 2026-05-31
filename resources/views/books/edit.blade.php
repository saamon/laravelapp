<x-layout title="書籍情報フォーム（編集）">
    <form action="{{route('books.update',$book)}}" method="post">
        @csrf
        {{-- postだけど更新用だからpatch --}}
        @method('PATCH')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('books.form')
        <div class="form-group">
            <button type="submit" class="btn btn-primary">更新</button>
            <a href="{{route('books.index')}}" class="btn btn-secondary">一覧に戻る</a>
        </div>
    </form>
</x-layout>
