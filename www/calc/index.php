<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css" type="text/css">
        <title></title>
        <style> body { background: url(img/small1.jpg); } </style>
        <script type="text/javascript" src="./sheetjs.all.min.js"></script>
        <script type="text/javascript" src="./excelplus-2.4.1.min.js"></script>        
        <script type="text/javascript" src="./fun.js"></script>        
    </head>
    <body onload="init()">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <p class="text-center">[Фон]</p>
                </div>
                <div style="background-image:url(img/small4.jpg)" class="col-sm-8">

                    <p class="text-center"><font size="7" color="blue" face="Arial">Главный блок</font></p>

                    <?php
                    echo "Прювет парень!!!!!!!"// put your code here
                    ?>

                    <div class="row">
                        <div class="col-sm-6">
                            <table>
                                <tr>
                                    <td><img align="left" src="img/small2.jpg" alt="Надпись">
                                        Это длинный-предлинный текст
                                        <div class="form-group">
                                            <label style="margin-left:10px;" class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> Один
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label style="margin-left:10px;" class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox2" value="option2"> Два
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label style="margin-left:10px;" class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox3" value="option3"> Три
                                            </label>                                
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><div class="input-group-addon">Элементы управления:</div></p>
                                        <!-- Standard button -->
                                        <button type="button" class="btn btn-default">Default</button>
                                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <!-- Indicates a successful or positive action -->
                                        <button type="button" class="btn btn-success">Success</button>
                                        <!-- Contextual button for informational alert messages -->
                                        <button type="button" class="btn btn-info">Info</button>
                                        <!-- Indicates caution should be taken with this action -->
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <!-- Indicates a dangerous or potentially negative action -->
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                                        <button type="button" class="btn btn-link">Link</button>                            
                                        <p>
                                        <p class="bg-info">Читал все свободное время</p>
                                        <p class="bg-warning">жители Петрограда начали громить булочные</p>
                                        <p class="bg-danger"> Читал, скучал и отдыхал</p>                                
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <img align="right" src="img/small5.png" alt="...">
                            Метод doGet() должен преобразовать URL-адрес запроса, извлечь данные из хранилища данных и подготовить ответ в формате XML. 
                            Следует отметить, что объявление метода было сгенерировано при создании класса. 
                            Для просмотра, возможно, потребуется расширить методы HttpServlet, щелкнув значок развертывания в левом поле (значок 'Развернуть').
                        </div>
                    </div>            
                    <div style="height: 100px;" class="row">
                        <div style="background-color: red; height: 100px;" class="col-sm-3"><p class="text-center"><font size="6" color="white" face="Arial">Блок21</font></p></div>
                        <div style="background-color: green; height: 100px;" class="col-sm-3"><p class="text-center"><font size="6" color="white" face="Arial">Блок22</font></p></div>
                        <div style="background-color: magenta; height: 100px;" class="col-sm-3"><p class="text-center"><font size="6" color="white" face="Arial">Блок23</font></p></div>
                        <div style="background-color: yellow; height: 100px;" class="col-sm-3"><p class="text-center"><font size="6" color="green" face="Arial">Блок24</font></p></div>
                    </div>            
                    <div style="background-color: white;" class="row">
                        <br>
                        <p class="text-center"><font size="6" color="brown" face="Arial">Калькулятор</font></p>
                        <div class="col-sm-4">
                            <!--                    <form class="form-inline">-->
                            <div class="form-group">
                                <label for="fio_id">ФИО</label>
                                <input type="text" class="form-control" id="fio_id" placeholder="Иванов Иван Иванович">
                            </div>
                            <!--                    </form>                -->
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="phone_id">Телефон</label>
                                <input type="text" class="form-control" id="phone_id" placeholder="89245559999">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="square_id">Площадь</label>
                                <div class="input-group">
                                <input type="text" onkeyup="JavaScript:calc_itogo();" class="form-control" id="square_id" placeholder="90">
                                <div class="input-group-addon">кв.м</div>
                                </div>
                            </div>
                        </div>
                    </div>            
                    <div style="background-color: white;" class="row">
                        <br>
                        <p style="margin-left:10px;"><font size="4" color="grey" face="Arial">Тип ремонта</font></p>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chernovoy_id" onclick="JavaScript:chernovoy_clc();" value="chernovoy_val">
                                        Черновой
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chistovaya_id" onclick="JavaScript:chistovaya_clc();" value="chistovaya_val">
                                        Чистовая отделка
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div style="background-color: white;" class="row">
                        <p style="margin-left:10px;"><font size="3" color="grey" face="Arial">Работы</font></p>
                        <div class="col-sm-4">
                            <!--                <fieldset disabled>-->
                            <div id="cher_elms_id" class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chern_vir_sten_id" onchange="JavaScript:check_calc_clc('chern_vir_sten_id');" value="1.2">
                                        Выравнивание стен
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chern_vir_pol_id" onchange="JavaScript:check_calc_clc('chern_vir_pol_id');" value="1.1">
                                        Выравнивание полов
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chern_molyarnie_id" onchange="JavaScript:check_calc_clc('chern_molyarnie_id');" value="1.15">
                                        Молярные работы
                                    </label>
                                </div>
                            </div>
                            <!--                </fieldset>-->
                        </div>
                        <div class="col-sm-4">
                            <!--                <fieldset disabled>-->
                            <div  id="chist_stena_elms_id" class="form-group">
                                <p><font size="2" color="grey" face="Arial">Стены</font></p>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chistovaya_stena_pokraska_id" onchange="JavaScript:check_calc_clc('chistovaya_stena_pokraska_id');" value="1.3">
                                        Покраска стен
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chistovaya_stena_oboi_id" onchange="JavaScript:check_calc_clc('chistovaya_stena_oboi_id');" value="1.25">
                                        Обои
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chistovaya_stena_shum_id" onchange="JavaScript:check_calc_clc('chistovaya_stena_shum_id');" value="1.35">
                                        Шумоизоляция
                                    </label>
                                </div>
                            </div>
                            <div id="chist_pol_elms_id" class="form-group">
                                <p><font size="2" color="grey" face="Arial">Полы</font></p>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chistovaya_pol_uteplenie_id" onchange="JavaScript:check_calc_clc('chistovaya_pol_uteplenie_id');" value="1.4">
                                        Утепление
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chistovaya_pol_shum_id" onchange="JavaScript:check_calc_clc('chistovaya_pol_shum_id');" value="1.15">
                                        Шумоизоляция
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chistovaya_pol_linolium_id" onchange="JavaScript:check_calc_clc('chistovaya_pol_linolium_id');" value="1.05">
                                        Линолиум
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chistovaya_pol_parket_id" onchange="JavaScript:check_calc_clc('chistovaya_pol_parket_id');" value="1.45">
                                        Паркет
                                    </label>
                                </div>
                            </div>
                            <div id="chist_potolok_elms_id" class="form-group">
                                <p><font size="2" color="grey" face="Arial">Потолок</font></p>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chistovaya_potolok_shum_id" onchange="JavaScript:check_calc_clc('chistovaya_potolok_shum_id');" value="1.4">
                                        Шумоизоляция
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chistovaya_potolok_pobelka_id" onchange="JavaScript:check_calc_clc('chistovaya_potolok_pobelka_id');" value="1.2">
                                        Побелка
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chistovaya_potolok_pokraska_id" onchange="JavaScript:check_calc_clc('chistovaya_potolok_pokraska_id');" value="1.35">
                                        Покраска
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="chistovaya_potolok_nat_id" onchange="JavaScript:check_calc_clc('chistovaya_potolok_nat_id');" value="1.4">
                                        Натяжные потолки
                                    </label>
                                </div>
                            </div>
                            <!--                </fieldset>-->
                        </div>
                    </div>            
                    <div style="background-color: white;" class="row">
                        <br>
                        <div class="col-sm-4">
                            <button onclick="JavaScript:export_excel();" class="btn btn-primary">Экспорт в excel</button>
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                                <div class="form-group">
                                    <font size="6" color="black" face="Arial">Итого:</font>                
                                </div>
                                <div class="form-group">
<!--                                                        <div id="itogo_id" class="input-group-addon">0</div>-->
                                    <div class="input-group">
                                        <input class="form-control" id="itogo_id" type="text" placeholder="" readonly>
                                    <div class="input-group-addon">руб</div>
                                    </div>
                                </div>
                        </div>
                    </div>        
                </div>
                <div class="col-sm-2">
                    <p class="text-center">[Фон]</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div style="background-image:url(img/small6.jpg)" class="col-sm-8">
                    <br>
                    <table margin-top:10px margin-bottom:10px width="100%">
                        <tr>
                            <td align="left"><font size="5" color="white" face="Arial">[footer]</font></td>
                            <td align="right"><img width="10%" align="bottom" src="img/topsecret.jpg" alt="..."></td>
                        </tr>
                    </table>                
                    <br>
                </div>

            </div>
        </div>  

    </body>
</html>
