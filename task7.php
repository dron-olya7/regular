<!--Дана строка 'ab abab abab abababab abea'.-->
<!--Напишите регулярку, которая найдет строки по шаблону: строка-->
<!--'ab' повторяется 1 или более раз.-->

<?php
echo preg_replace('#(ab)+#', '*', 'ab abab abab abababab abea' );
