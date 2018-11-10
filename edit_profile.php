<?php
require_once("dbconnect.php");
require_once("header.php");


if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $query = "SELECT * FROM 'users' WHERE email LIKE '$email'";
     if($result = $mysqli->query($query)){
        while ($row = mysqli_fetch_assoc($result)) {
            foreach ($row as $key => $value) {
                $first_name = $row['first_name'];
                $last_name = $row ['last_name'];
                $email = $row ['email'];
                $password = $row ['password'];
                $description = $row ['description'];
            }
        }
    }
}
?>
<table>
    <tr>
        <td> Имя: </td>
        <td>
            <input type="text" name="first_name" value="" required="required"/>
        </td>
    </tr>

    <tr>
        <td> Фамилия: </td>
        <td>
            <input type="text" name="last_name" required="required" />
        </td>
    </tr>

    <tr>
        <td> Email: </td>
        <td>
            <input type="email" name="email" required="required" /><br />
            <span id="valid_email_message" class="mesage_error"></span>
        </td>
    </tr>

    <tr>
        <td> Пароль: </td>
        <td>
            <input type="password" name="password" placeholder="минимум 6 символов" required="required" /><br />
            <span id="valid_password_message" class="mesage_error"></span>
        </td>
    </tr>
    <tr>
        <td> Коротко о себе </td>
        <td>
            <input type="description" name="description"/><br />

        </td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="btn_submit_register" value="Зарегистрироватся!" />
        </td>
    </tr>


<?php
//Подключение подвала
require_once("footer.php");
?>
