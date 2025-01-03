<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー一覧</title>
</head>
<body>
    <h1>ユーザー一覧</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メール</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user["id"] }}</td>
                    <td>{{ $user["name"] }}</td>
                    <td>{{ $user["age"] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
