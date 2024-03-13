<!DOCTYPE html>
<html>
<head>
    <title>Определение дня недели</title>
</head>
<body>
    <h2>Введите номер дня недели (1-7):</h2>
    <form method="post" action="">
        <input type="number" name="day_number" min="1" max="7" required>
        <input type="submit" name="submit" value="Показать день">
    </form>

    <?php
    
    if(isset($_POST['submit'])) {
       
        $day_number = intval($_POST['day_number']); // 

        
        switch($day_number) {
            case 1:
                echo "<p>Понедельник</p>";
                break;
            case 2:
                echo "<p>Вторник</p>";
                break;
            case 3:
                echo "<p>Среда</p>";
                break;
            case 4:
                echo "<p>Четверг</p>";
                break;
            case 5:
                echo "<p>Пятница</p>";
                break;
            case 6:
                echo "<p>Суббота</p>";
                break;
            case 7:
                echo "<p>Воскресенье</p>";
                break;
            default:
                echo "<p>Неверный номер дня</p>";
        }
    }
    ?>
</body>
</html>
