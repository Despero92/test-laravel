<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админка - Главная страница</title>
    @include('template-parts.css')
    @yield('css')
</head>
<body>
    <header>
        <h2>Админка - Главная страница</h2>
        <section id="tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Домой</a></li>
                <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Профиль</a></li>
                <li><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Сообщения</a></li>
                <li><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Настройки</a></li>
            </ul>
        </section>
    </header>
<main>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            @include('admin.admin_parts.slider')
            @yield('slider_header')
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
            @include('admin.admin_parts.works')
            @yield('works')
        </div>
        <div role="tabpanel" class="tab-pane" id="messages">
            @include('admin.admin_parts.about')
            @yield('about')
        </div>
        <div role="tabpanel" class="tab-pane" id="settings">
            @include('admin.admin_parts.contacts')
            @yield('contacts')
        </div>
    </div>

</main>
    @include('template-parts.js')
    @yield('js')
</body>
</html>