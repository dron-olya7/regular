<!--Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. -->
<!--Напишите регулярку, которая найдет строки *+, *q+, *qq+, *qqq+, -->
<!--не захватив остальные.-->

<?php
echo preg_replace('#\*q*\+#', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+');