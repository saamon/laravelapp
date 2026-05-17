<x-layout>
    @foreach($books as $book)
        <h3>署名：{{ $book->title }}</h3>
        <ul>
            @foreach($book->reviews as $review)
                <li>{{ $review->body }} {{ $review->rate }}</li>
            @endforeach
        </ul>
        <hr/>
    @endforeach
</x-layout>
