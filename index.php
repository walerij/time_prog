<?php 

   date_default_timezone_set("UTC"); // Устанавливаем часовой пояс по Гринвичу
  $time = time(); // Вот это значение отправляем в базу
  $offset = 3; // Допустим, у пользователя смещение относительно Гринвича составляет +3 часа
  $time += 3 * 3600; // Добавляем 3 часа к времени по Гринвичу
  echo date("Y-m-d H:i:s", $time); // Выводим время пользователя, согласно его часовому поясу

?>