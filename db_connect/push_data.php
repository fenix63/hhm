<?
//require_once 'connection.php'; // подключаем скрипт

$host = 'mysql.hostinger.ru'; // адрес сервера
$database = 'u653721317_test'; // имя базы данных
$user = 'u653721317_user'; // имя пользователя
$password = '509912'; // пароль

$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));


if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Message'])){
    //echo 'Данные успешно записаны в БД';
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $msg = $_POST['Message'];

    //$query = "INSERT INTO Comment('Name','Email','Message') VALUES ('" .$name."', '".$email."', '".$msg."')";
    $query = "INSERT INTO Comment(Name,Email,Message) VALUES('".$name."','".$email."','".$msg."')";


    $result = mysqli_query($link, $query);
    if ($result) {
        echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">';
        echo '<div class="comment">';
        echo '<div class="user-name">' . $name . '</div>';
        echo '<div class="comment-content">';
        echo '<div class="email">' . $email . '</div>';
        echo '<div class="comment-msg">' . $msg . '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    else
        echo "Ошибка добавления в БД";
}

?>