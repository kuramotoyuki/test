<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/introduction.css') }}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">AboutMe</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
        <div class="title-wrapper container mt-4">
            <div class="english-title pe-4">Self Introduction</div>
            <h1>社員自己紹介</h1>
        </div>
        <div class="mt-md-5 pt-3 pb-3 pt-md-5 container">
            <div class="row">
                <div class="list-wrapper d-none d-md-block col-md-3">
                    <ul id="list-example" class="list-group me-5 pt-8 sticky-top">
                        <li><a class="list-group-item-action" href="#list-item-1">自己紹介</a></li>
                        <li><a class="list-group-item-action" href="#list-item-2">経歴</a></li>
                        <li><a class="list-group-item-action" href="#list-item-3">目指すキャリア</a></li>
                        <li><a class="list-group-item-action" href="#list-item-4">休日のわたし</a></li>
                        <li><a class="list-group-item-action" href="#list-item-5">興味のある技術</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div
                    data-bs-spy="scroll"
                    data-bs-target="#list-example"
                    data-bs-offset="0"
                    class="scrollspy-example"
                    tabindex="0"
                    >
                        <div class="row" id="list-item-1">
                            <img class="col-md-9 col-xl-8 order-md-2 main-image" src="{{ asset('/images/introduction/myself2.JPG') }}" alt="">
                            <div class="introduction-outline mt-3 mt-md-5 col-xl-4 col-md-3 order-md-1">
                                <div class="outline-content">
                                    <h5>ENGINEER</h5>
                                    <p>Custom Saas Development Division</p>
                                    <h2>倉本 勇輝</h2>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="mt-3 mt-md-5 fs-6">神奈川県相模原市生まれ。小学校時代に兵庫に引っ越し、学生時代は兵庫で過ごした。高校時代は陸上部に入部し、高校時代から部活動に熱心に取り組んだ。
                                大学時代は神戸市外国語大学にて言語や経済を勉強しながら登山部に所属。北は北海道、南は鹿児島まで日本全国の山を練り歩いた。<br>
                                大学卒業後は証券会社に入社し、縁あって営業店からシステム部署に異動。
                                業務自動化のための開発を通し開発に大きなやりがいを感じ、エンジニアとしてのキャリアを深めるべく一念発起して現在所属のSpiceFactoryに入社した。
                            </p>
                        </div>
                        <h2 id="list-item-2" class="itroduction-subtitle mt-5">経歴</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">年月日</th>
                                <th scope="col">経歴</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>2017 - 2020</td>
                                <td>西宮市立甲陵中学校</td>
                                </tr>
                                <tr>
                                <td>2020 - 2013</td>
                                <td>兵庫県立西宮高校　国際経済科</td>
                                </tr>
                                <tr>
                                <td>2014 - 2019</td>
                                <td>神戸市外国語大学　国際関係学科</td>
                                </tr>
                                <tr>
                                <td>2019 - 2021</td>
                                <td>東海東京証券株式会社　大阪支店営業部</td>
                                </tr>
                                <tr>
                                <td>2021 - 2022</td>
                                <td>東海東京証券株式会社　フロントシステム部</td>
                                </tr>
                                <tr>
                                <td>2022 - 現在</td>
                                <td>スパイスファクトリー株式会社 Custom Saas Development Div</td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 id="list-item-3" class="itroduction-subtitle mt-5">目指すキャリア</h2>
                        <p>IT業界は変化が早いので、特定の言語・環境に限らず、幅広い知識を持ったエンジニアになりたいと思っています。今後はPHPエンジニアとしてまずPHPフレームワークをマスターし、その後はpython、Javascriptおよびそれらのフレームワーク等も学習し、フルスタックに活躍できるエンジニアになりたいと考えています。</p>
                        <h2 id="list-item-4" class="itroduction-subtitle mt-5">休日のわたし</h2>
                        <div class="row mt-3" id="list-item-1">
                            <img class="col-md-7 main-image" src="{{ asset('/images/introduction/hiking.jpg') }}" alt="">
                            <div class="ps-md-4 mt-3 col-md-5">
                                <p>
                                    学生時代に登山部にて登山をしていた経験もあって、月に一回ほど登山に行くことが趣味です。関西に住んでいた頃は地元の六甲山や金剛葛木山によく行ってました。
                                    関東に異動になってからは高尾山や神奈川県の大山、秩父の雲取山などを登っています。社会人になってからは長くても1泊2日の登山しかしていないので、今年は長期休暇で縦走したいと思ってます！
                                </p>
                            </div>
                        </div>
                        <h2 id="list-item-5" class="itroduction-subtitle mt-5">興味のある技術</h2>
                        <div class="row pt-2">
                            <div class="p-4 p-sm-2 col-4 col-sm-2">
                                <img class="main-image w-100" src="{{ asset('/images/introduction/laravel_icon.png') }}">
                            </div>
                            <div class="p-4 p-sm-2 col-4 col-sm-2">
                                <img class="main-image w-100" src="{{ asset('/images/introduction/WordPress_icon.png') }}">
                            </div>
                            <div class="p-4 p-sm-2 col-4 col-sm-2">
                                <img class="main-image w-100" src="{{ asset('/images/introduction/NodeJS_icon.png') }}">
                            </div>
                            <div class="p-4 p-sm-2 col-4 col-sm-2">
                                <img class="main-image w-100" src="{{ asset('/images/introduction/React_icon.png') }}">
                            </div>
                            <div class="p-4 p-sm-2 col-4 col-sm-2">
                                <img class="main-image w-100" src="{{ asset('/images/introduction/MySQL_icon.png') }}">
                            </div>
                            <div class="p-4 p-sm-2 col-4 col-sm-2">
                                <img class="main-image w-100" src="{{ asset('/images/introduction/AWS_icon.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer mt-5 text-dark">
            <div class="footer-contents container ps-5 pe-5">
                <div class="logo row justify-content-center">
                    <a class="footer-link pb-2 col mt-3 text-center text-dark" href="#">AboutMe</a>
                </div>
                <div class="nav footer-contents-main row justify-content-evenly">
                    <div class="footer-link pb-2 col-sm-2 mt-3 text-center"><a class="text-dark" href="#">WORKS</a></div>
                    <div class="footer-link pb-2 col-sm-2 mt-3 text-center"><a class="text-dark" href="#">BLOG</a></div>
                    <div class="footer-link pb-2 col-sm-2 mt-3 text-center"><a class="text-dark" href="#">RECRUIT</a></div>
                    <div class="footer-link pb-2 col-sm-2 mt-3 text-center"><a class="text-dark" href="#">COMPANY</a></div>
                    <div class="footer-link pb-2 col-sm-2 mt-3 text-center"><a class="text-dark" href="#">CONTACT</a></div>
                </div>
                <div class="copyright row justify-content-evenly">
                    <p class="col mt-3 text-center">
                        COPYRIGHT © AboutMe Inc. All rights Reserved.
                    </p>
                </div>
            </div>
        </footer>
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>