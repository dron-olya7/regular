<!--Дана строка 'aba aca aea abba adca abea'. -->
<!--Напишите регулярку, которая найдет строки abba и abea, -->
<!--не захватив adca.-->

<?php
echo preg_replace('#ab.a#', '*', 'aba aca aea abba adca abea');