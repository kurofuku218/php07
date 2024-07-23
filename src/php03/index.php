<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
    <title>php世界時計</title>
</head>
<body>
    <header>
        <div class="header-inner">
            <a class="header-logo" href=/php03/index.php>World Clock</a>
        </div>
    </header>
    <!--<main>
        <div class="main-logo">
            <h2>日本と世界の時間を比較</h2>
        </div>
        <div class="main-container">
            <form class="container_form" action="result.php" method="get">
                <select class="container-select_select" name="city">
                    <option value="シドニー">シドニー</option>
                    <option value="上海">上海</option>
                    <option value="モスクワ">モスクワ</option>
                    <option value="ロンドン">ロンドン</option>
                    <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                    <option value="ニューヨーク">ニューヨーク</option>
                </select>
                <div> <buttonは<form>の中のみ有効だから別にできない
                    <button class="container-button" type="submit">検索</button>
                </div>
            </form>
        </div>

    </main>       -->
    <main>
        <div class="main-logo">
            <h2>日本と世界の時間を比較</h2>
        </div>
        <div class="main-container">
            <div class="container-form">
                <form class="container-form_form" action="result.php" method="get">
                    <div class="container-select">
                        <select class="container-select_select" name="city">
                            <option value="シドニー">シドニー</option>
                            <option value="上海">上海</option>
                            <option value="モスクワ">モスクワ</option>
                            <option value="ロンドン">ロンドン</option>
                            <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                            <option value="ニューヨーク">ニューヨーク</option>
                        </select>
                    </div>
                    <div class=container-button>
                        <button class="container-button_button" type="submit">検索</button>
                    </div>
                </form>    
            </div>

        </div>
    </main> 
</body>
</html>
