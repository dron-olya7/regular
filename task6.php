<!--Дана строка 'aa aba abba abbba abca abea'. -->
<!--Напишите регулярку, которая найдет строки aa, aba по шаблону: -->
<!--буква 'a', буква 'b' один раз или ниодного, буква 'a'.-->

<?php
echo preg_replace('#ab?a#', '*', 'aa aba abba abbba abca abea' );

