<!--Дана строка 'aa aba abba abbba abca abea'. -->
<!--Напишите регулярку, которая найдет строки aba, abba, abbba -->
<!--по шаблону: буква 'a', буква 'b' любое количество раз, буква 'a'.-->

<?php
echo preg_replace('#ab+a#', '*', 'aa aba abba abbba abca abea');