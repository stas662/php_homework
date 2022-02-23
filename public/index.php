<?php
  // Переключение между авторизацией и регистрацией
  $isRegistration = null;
  // Пользователь авторизован или нет
  $isAuth = false;
  $rating = 56;
  $login = 'userLogin'
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<link rel="icon" href="assets/images/favicon.ico">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
  <div class="wrapper">
    <div class="content">
      <div class="header">
        <a class="header-logo" href="/">
          <img src="assets/images/logo.png" alt="logo">
          Наука и Техника
        </a>
        <div class="header-nav">
          <div class="hamburger"><span></span></div>
          <div class="hamburger-menu hamburger-top">
            <span></span>
            <a class="header-menu" href="/">Главная</a>
            <a class="header-menu" href="/news">Новости</a>
            <a class="header-menu" href="/articles">Статьи</a>
            <a class="header-menu" href="/science">Наука</a>
            <a class="header-menu" href="/technics">Техника</a>
            <a class="header-menu" href="/space">Космос</a>
            <a class="header-menu" href="/gadgets">Гаджеты</a>
            <a class="header-menu" href="/add-post">Добавить пост</a>
          </div>
          <?php 
            if (!$isAuth) {
          ?>
          <div class="header-nav__icon">
            <i class='fas fa-sign-in-alt'></i>
            Войти
          </div>
          <?php 
            } else {
          ?>
          <div class="header-nav__icon">
            <i class='fas fa-sign-in-alt'></i>
            Выйти
          </div>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
    <div class="content-header__fixed"></div>
    <div class="wrapper">
      <div class="wrapper-newsposts">
        <div class="content-newsposts" style="flex: 65%">
          <div>
            <a href="/news" class="content-newsposts__title">Новости</a>
            <div class="content-newsposts__body">
              <div class="content-newsposts__block">
                <div class="content-newsposts__element" >
                  <a href="#">
                    <img src="assets/images/image.jpg" alt="image">
                    <div>Новость 1</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <a href="/news" class="content-newsposts__title">Статьи</a>
            <div class="content-newsposts__body">
              <div class="content-newsposts__block">
                <div class="content-newsposts__element" >
                  <a href="#">
                    <img src="assets/images/image.jpg" alt="image">
                    <div>Статья 1</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-posts" style="flex: 34%;">
          <?php 
            if (!$isAuth) {
              if (!$isRegistration) {
          ?>
              <div class="content-authorization">
                <div class="content-authorization__title">Войти</div>
                <div class="content-authorization__block">
                  <input type="email" placeholder='Логин' />
                  <input type="password" placeholder='Пароль' />
                  <a style="width: 100%; height: 100%" href="/">
                    <button style="width: 100%">
                      <i class='fas fa-sign-in-alt'></i>
                      Войти
                    </button>
                  </a>
                  <div class="content-authorization__link">
                    <div class="content-link">Забыли пароль </div>|
                    <div class="content-link">
                      Зарегистрироваться
                    </div>
                  </div>
                </div>
              </div>
            <?php 
              } else {
            ?>
              <div class="content-registration">
                  <div class="content-registration__title">Регистрация</div>
                <div class="content-registration__block">
                  <input placeholder='Логин'/>
                  <input type="email" placeholder='Email'/>
                  <input type="password" placeholder='Пароль'/>
                  <a style="width: 100%; height: 100%" href="/">
                    <button style="width: 100%">
                      <i class='fas fa-sign-in-alt'></i>
                      Зарегистрироваться
                    </button>
                  </a>
                  <div class="content-registration__link">
                    <div class="content-link" onclick="<?php $isRegistration = null; ?>">Войти</div>
                  </div>
                </div>
              </div>
          <?php 
              }
            } else {
          ?>
            <div class="content-smallaccount">
              <a href="#" class="content-smallaccount__title">Профиль</a>
              <div class="content-smallaccount__body">
                  <img src="assets/images/kot_8401.jpg"
                      alt="avatar">
                  <div class="content-smallaccount__body-link">
                      <div>
                        <?php echo $login; ?>
                      </div>
                      <div>Рейтинг <?php echo $rating; ?></div>
                      <div class="content-smallaccount__body-link-button">
                        Редактировать профиль
                      </div>
                      <div class="content-smallaccount__body-link-button">
                        Выход
                      </div>
                  </div>
              </div>
            </div>
          <?php
            }
          ?>
          <div class="wrapper-popular">
            <div class="content-popular">
              <div class="content-popular__title">Популярное</div>
              <div class="content-popular__body">
                <div class="content-popular__block">
                  <div class="content-popular__element" >
                    <a href="#">
                      <img src="assets/images/image.jpg" alt="image">
                      <div>Популярное 1</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wrapper-recommend">
            <div class="content-recommend">
              <div class="content-recommend__title">Рекомендуемое</div>
              <div class="content-recommend__body">
                <div class="content-recommend__block">
                  <div class="content-recommend__element" >
                    <a href="#">
                      <img src="assets/images/image.jpg" alt="image">
                      <div>Рекомендуемое 1</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper-footer">
      <div class="footer">
        <div class="footer__title">This site</div>
        <ul>
          <li><a href="#">Element1</a></li>
          <li><a href="#">Element2</a></li>
          <li><a href="#">Element3</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>