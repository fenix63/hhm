
<html>
  <head>
    <title>Заголовок страницы</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="css/bundle.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"/>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.js"></script>

      <script src="js/custom.js"></script>

  </head>
  <body>
    <div class="top-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="logo"><a href="#"><img src="images/logo.png"/></a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-2 col-xs-offset-5 text-center">
            <div class="mail-icon"><img src="images/mail-icon.png"/></div>
          </div>
        </div>
        <div class="row">
          <form>


            <div class="form-group col-lg-6 col-md-6">
              <label for="inputName">Имя <span>&nbsp*</span></label>
              <input name="Name" id="inputName" type="text" placeholder="" class="form-control" required/>
              <div class="error-box"></div>

              <label for="inputEmail">Email <span>&nbsp*</span></label>
              <input name="email" id="inputEmail" type="email" placeholder="Email" class="form-control"  required/>
              <div class="error-box"></div>
            </div>


            <div class="form-group col-lg-6 col-md-6">

              <label for="textarea">Комментарий <span>&nbsp*</span></label>
              <textarea name="msg" id="textarea" required></textarea>
              <div class="error-box"></div>

              <div class="row">
                <div class="col-lg-3 col-lg-offset-9 text-right">
                  <button type="submit" class="btn btn-primary submit-btn">Записать</button>
                </div>
              </div>
            </div>


          </form>
        </div>
      </div>
    </div>
    <div class="bottom-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12 text-center">
            <h2>Выводим комментарии</h2>
          </div>
        </div>

          <?

            require_once 'db_connect/connection.php'; // подключаем скрипт
            require_once 'db_connect/functions.php';// Мои кастомные функции
            // подключаемся к серверу


            // выполняем операции с базой данных
                getData($link, 'Comment');


            // закрываем подключение
            mysqli_close($link);

          ?>

      </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="logo"><a href="#"><img src="images/logo.png"/></a></div>
                </div>
                <div class="col-lg-2 col-lg-offset-4 col-md-2 col-md-offset-4 col-sm-2 col-sm-offset-4 col-xs-2 col-xs-offset-4">
                    <div class="vk text-center"><a href="https://vk.com/"><i class="fab fa-vk"></i></a></div>
                </div>
                <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-2 col-sm-offset-0 col-xs-2 col-xs-offset-0">
                    <div class="fb text-center"><a href="http://facebook.com"><i class="fab fa-facebook-f"></i></a></div>
                </div>
            </div>
        </div>
    </footer>
  </body>
</html>