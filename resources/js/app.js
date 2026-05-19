// fetchしてapi通信を確認

/**
 * jsonの中身：
 * {
 *   message: 'Hello API'
 * }
 */
fetch('/api/hello')
    .then(response => response.json())
    .then(data => {
        console.log(data.message);
    })
