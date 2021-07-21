<?php
$port=8100;
echo '<hr size="1">';
$file = basename($_SERVER['PHP_SELF'], ".php");
if ($file!="task") {
echo '<p>';
echo '<input type="submit" value="Далее">';
echo '</p>';
}
if ($file!="main") echo '<p>Вернуться на <a href="http://localhost:'.$port.'/sprav/main.php">домашнюю страницу</a></p>';

#echo '<hr size="1">';
echo '<p>&copy;&nbsp;2015 <a href="http://vk.com/id21493443">vk.com/id21493443</a></p>';
#echo '</form>';

?>