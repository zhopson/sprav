<?php
header('Content-Type: text/html; charset=windows-1251');
echo '<script type="text/javascript">';
echo 'var sx="";';
echo 'function GetText() {';
echo '    window.sx=document.getElementById("field_new_lang_id").value;';
echo '}';
echo 'function add_lang() {';
echo '    if (window.sx!="")';
echo '     self.location.href="add_rec.php?frm=lang&newrec=" + window.sx;';
echo '}';
echo '</script>';
#header('Content-Type: text/html; charset=utf-8');

$link = mysqli_connect('db', 'man_local', '123qwe')
    or die('Не удалось соединиться: ' . mysql_error());

mysqli_select_db($link,'my_db') or die('Не удалось выбрать базу данных');
    mysqli_set_charset($link,"utf8");

$query = 'SELECT * FROM lang';
$result = mysqli_query($link,$query) or die('Запрос не удался: ' . mysqli_error($link));

echo '<html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
echo '<title>Мои справочники</title>';
echo '</head>';
echo '<body>';
echo '<h3>Помощник по программированию</h3>';
echo '<form name="main_form" method="get" action="lang.php">';
echo '<hr size="1">';
echo '<p>Выберите Язык:</p>';

######################################################################################

echo '<table width="100%" cellspacing=3 border=0><tr><td valign="top" align="left">';


echo '<p>';

while ($row = mysqli_fetch_row($result)) {

    $col_value = mb_convert_encoding($row[1],"WINDOWS-1251","UTF-8");
    echo '<input name="radiobutton" type="radio" value="'.$row[0].'">';
    echo $col_value.'<br>';
}

echo '</p>';
#&nbsp
echo '</td><td valign="top" align="right">';

echo '<p><span>Новый язык:</span>&nbsp';
echo '<input type="text" id="field_new_lang_id" name="field_new_lang"><br>';
echo '<input type="button" name="button_add_new_lang" value="Добавить" onclick="add_lang()"></p>';
#echo '<input type="submit" name="button_add_new_lang" value="Добавить"></p>';
#echo '<input type="button" onclick="document.getElementById("field_new_lang_id").src = "add_rec.php?newrec=" + sx;" value="Добавить">';
#echo '<input type="button" name="button_add_new_lang" value="Добавить"></p>';
#echo '<a href="add_rec.php?newrec=x">Добавить</a>';
#echo '<p><script>document.write(GetText());</script></p>';
#echo '<a href="add_rec.php?newrec=&{sx};">Добавить</a>';
#echo '<script type="text/javascript">document.write("<a href="add_rec.php?newrec="+"""+x+"""+">Добавить</a>");</script>';

echo '</td></tr></table>';
######################################################################################

echo '<script type="text/javascript">';
echo 'document.getElementById("field_new_lang_id").onchange = GetText;';
echo '</script>';

// Освобождаем память от результата
mysqli_free_result($result);

// Закрываем соединение
mysqli_close($link);

include 'footer.php';

echo '</form>';
echo '</body>';
echo '</html>';

?>