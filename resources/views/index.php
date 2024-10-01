<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ポートフォリオ初号機</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@400;500;700&display=swap" rel="stylesheet">

        @vite(['resources/css/reset.css', 'resources/css/style.css', 'resources/js/script.js'])
        <!-- <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css"> -->
        
    </head>
    <body>
        <header>
            <div class="header-container">
                <ul class="header-list">
                    <li><a href="index.html">Top</a></li>
                    <li><a href="#2">about me</a></li>
                    <li><a href="#3">production</a></li>
                    <li><a href="#4">contact</a></li>
                </ul>
            </div>
        </header>
        <top>
            <div class="top-container">
                <img src="img/nu00620p.jpg" class="plane-img" id="img">
                <h1>Thanks for Coming</h1>
                <h3>Ryosuke's Portfolio</h3>
                <img src="img/town.jpg" class="town-img-1">
                <img src="img/town.jpg" class="town-img-2">
                <img src="img/town.jpg" class="town-img-3">
            </div>
        </top>
        <about id="2">
            <div class="about-container">
                <h1 class="about-title">about me</h1>
                <p class="about-text">りょうすけのポートフォリオへようこそ！！<br>私はWEBサイト制作を独学で始め、<br>
                    現在は実際のプロジェクトでスキルを磨いています。<br>
                    これまでの制作実績や習得した技術をお見せしたいです。<br>
                    私の成長の軌跡や仕事に対する情熱をぜひご覧ください。</p>
            </div>
        </about>
        <production id="3">
            <div class="production-container">
                <h1 class="production-title">production</h1>
                <p class="production-text">これまでに制作した成果物を紹介します！</p>
                <div class="img-container-1">
                    <div class="production-img-container-1">
                        <a href="index.html"><img src="img/1008.png" class="production-img-1"></a>
                        <a href="index.html"><p class="production-img-text-1">オンラインショッピングサイト</p></a>
                    </div>
                    <div class="production-img-container-2">
                        <a href="index.html"><img src="img/1008.png" class="production-img-2"></a>
                        <a href="index.html"><p class="production-img-text-2">オンラインショッピングサイト</p></a>
                    </div>
                    <div class="production-img-container-3">
                        <a href="index.html"><img src="img/1008.png" class="production-img-3"></a>
                        <a href="index.html"><p class="production-img-text-3">オンラインショッピングサイト</p></a>
                    </div>
                </div>
                <div class="img-container-2">
                    <div class="production-img-container-4">
                        <a href="index.html"><img src="img/1008.png" class="production-img-4"></a>
                        <a href="index.html"><p class="production-img-text-4">オンラインショッピングサイト</p></a>
                    </div>
                    <div class="production-img-container-5">
                        <a href="index.html"><img src="img/1008.png" class="production-img-5"></a>
                        <a href="index.html"><p class="production-img-text-5">オンラインショッピングサイト</p></a>
                    </div>
                    <div class="production-img-container-6">
                        <a href="index.html"><img src="img/1008.png" class="production-img-6"></a>
                        <a href="index.html"><p class="production-img-text-6">オンラインショッピングサイト</p></a>
                    </div>
                </div>
            </div>
        </production>
        <contact id="4">
            <div class="contact-container">
                <h1 class="contact-title">contact</h1>
                <p class="contact-text">最後までご覧いただきありがとうございました！<br>何か気になることや、お仕事の連絡はこちらからお願いします！</p>
                <form action="mail.php" method="post">
                    <div class="name-mail-form">
                        <div class="name-form">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="mail-form">
                            <label for="mail">Mail</label>
                            <input type="text" id="mail" name="mail">
                        </div>
                    </div>
                    <div class="comment-form">
                        <label for="comment">Comment</label>
                        <textarea name="comment" id="comment"></textarea>
                    </div>
                    <input type="submit" value="send" class="form-button">
                </form>
            </div>
        </contact>
        <footer>
            <p>© 2024 Ryosuke Katahira</p>
        </footer>
        <!-- <script src="script.js"></script> -->
    </body>
</html>