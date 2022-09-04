<!--Дана строка 'ahb acb aeb aeeb adcb axeb'.-->
<!--Напишите регулярку, которая найдет строки ahb, acb, aeb -->
<!--по шаблону: буква 'a', любой символ, буква 'b'.-->

<?php
echo preg_replace('#a.b#', '*', 'ahb acb aeb aeeb adcb axeb');