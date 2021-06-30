<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Test</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
<div class="wrapper">
    <main class="main-content">
        <div class="my-profile">


        @if ($user)
                <h2 class="heading">Мой профиль</h2>
                <div class="profile">
                    <div class="avatar">
                        <img src="{{ url($user->avatar_path) }}" alt="Аватар" class="avatar__pic">
                    </div>
                    <div class="information">
                        <div class="nickname">{{ $user->nick_name }}</div>
                        <div class="user-name">
                            <span class="name">{{ $user->name }}</span>
                            <span class="surname">{{ $user->last_name }}</span>
                        </div>
                        <a href='tel:{{ $user->phone_number }}' class="phone">{{ $user->phone_number }}</a>
                    </div>
                </div>
        @else
            <div class='edit-profile'>
                <h2 class="heading">Редактировать профиль</h2>
                <form class='form' id='form' method='POST' enctype='multipart/form-data'>
                    @csrf
                    <ul class="form__list">
                        <li class="form__item">
                            <label class='form__label' for="nickname">Никнейм:</label>
                            <input class='form__input' id='nickname' name="nick_name" type="text">
                        </li>
                        <li class="form__item">
                            <label class='form__label' for="name">Имя:</label>
                            <input class='form__input' id='name' name="name" type="text">
                        </li>
                        <li class="form__item">
                            <label class='form__label' for="surname">Фамилия:</label>
                            <input class='form__input' id='surname' name="last_name" type="text">
                        </li>
                        <li class="form__item">
                            <label class='form__inline-label' for="avatar">Аватар:</label>
                            <input class='form__inline-input' id='avatar' name="avatar" type="file" value='image/jpeg,image/png'>
                        </li>
                        <li class="form__item">
                            <label class='form__label' for="phone">Телефон:</label>
                            <input class='form__input' id='phone' name="phone_number" type="text">
                        </li>
                        <li class="form__item">
                            <div class="form__title">Пол:</div>
                            <label class='form__inline-label' for="male">Мужской</label>
                            <input class='form__inline-input' name='sex' value="1" id='male' type="radio">
                            <label class='form__inline-label' for="female">Женский</label>
                            <input class='form__inline-input' name='sex' value="2" id='female' type="radio">
                        </li>
                        <li class="form__item">
                            <label class='form__inline-label' for="showPhone">Я согласен получать email-рассылку</label>
                            <input class='form__inline-input' id='showPhone' value="1" name="email_agree" type="checkbox">
                        </li>
                        <li class="form__item">
                            <button class='form__button' type="submit">Отправить</button>
                        </li>
                    </ul>
                </form>
            </div>
        @endif
    </main>
</div>
</body>
</html>
