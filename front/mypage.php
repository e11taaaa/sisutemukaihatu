<?php
// 仮のユーザー情報（実際はデータベースから取得など）
$user = [
    'name' => '麻生花子',
    'address' => '福岡県福岡市博多区',
    'postal' => 'T234-5678',
    'email' => 'mnbvcd0987@gmail.com'
];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー情報</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h2><?php echo htmlspecialchars($user['name']); ?></h2>
        <button class="logout-btn">ログアウト</button>
    </div>

    <div class="info">
        <div class="item">
            <span class="label">住所</span>
            <p><?php echo htmlspecialchars($user['postal']); ?>　<?php echo htmlspecialchars($user['address']); ?></p>
        </div>

        <div class="item">
            <span class="label">メールアドレス</span>
            <p><?php echo htmlspecialchars($user['email']); ?></p>
        </div>

        <button class="change-btn">変更</button>
    </div>
</div>

</body>
</html>
