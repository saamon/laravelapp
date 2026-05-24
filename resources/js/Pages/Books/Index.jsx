import {useEffect, useState} from "react";

export default function Index() {
    const [books, setBooks] = useState([]);

    useEffect(() => {
        async function loadBooks() {
            try {
                // サーバーから返事来るまで待つ
                const response = await fetch('/api/books');

                if (!response.ok) {
                    throw new Error('本の取得に失敗しました');
                }

                // 返事の中身をjsonとして読み終わるまで待つ
                const data = await response.json();

                setBooks(data);
            } catch (error) {
                // tryで起きたエラー内容
                console.error(error);
            }
        }

        void loadBooks();
    }, []);

    return (
        <main>
            <h1>Books</h1>

            <ul>
                {books.map(book => (
                    <li key={book.id}>
                        {book.title} - {book.price}円
                    </li>
                ))}
            </ul>
        </main>
    );
}
