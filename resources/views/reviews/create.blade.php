<x-layout title="レビュー投稿">
    <div class="container py-4">
        <div class="mb-4">
            <h1 class="h3">レビュー投稿</h1>
            <p class="text-muted mb-0">{{ $book->title }}</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('books.reviews.store', $book) }}">
            @csrf

            <div class="mb-3">
                <label for="rate" class="form-label">評価</label>
                <select id="rate" name="rate" class="form-select">
                    <option value="">選択してください</option>
                    @for ($rate = 5; $rate >= 1; $rate--)
                        <option value="{{ $rate }}" @selected((int) old('rate') === $rate)>
                            {{ $rate }}
                        </option>
                    @endfor
                </select>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">レビュー</label>
                <textarea id="body" name="body" class="form-control" rows="5">{{ old('body') }}</textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">レビュー投稿</button>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">一覧に戻る</a>
            </div>
        </form>
    </div>
</x-layout>
