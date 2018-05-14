<?
function getData($link, $table_name){
    // выполняем операции с базой данных
    $query ="SELECT * FROM ".$table_name;
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));


    echo '<div class="row blocks">';
    while($row = mysqli_fetch_array($result))
    {
        echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">';
            echo '<div class="comment">';
                echo '<div class="user-name">'.$row['Name'].'</div>';

                echo '<div class="comment-content">';
                    echo '<div class="email">'.$row['Email'].'</div>';
                    echo '<div class="comment-msg">'.$row['Message'].'</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';

    }

    echo '</div>';
}

?>