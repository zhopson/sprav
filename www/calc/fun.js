/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var cher_elms_id;
var chist_stena_elms_id;
var chist_pol_elms_id;
var chist_potolok_elms_id;
var edItogo_id;
var oldScuare;
var cher;
var chist;
var ed_sqr,ed_tel,ed_fio;

function init() {
    cher_elms_id = document.getElementById("cher_elms_id");
    cher_elms_id.style.display = 'none';
    
    chist_stena_elms_id = document.getElementById("chist_stena_elms_id");
    chist_stena_elms_id.style.display = 'none';

    chist_pol_elms_id = document.getElementById("chist_pol_elms_id");
    chist_pol_elms_id.style.display = 'none';
    
    chist_potolok_elms_id = document.getElementById("chist_potolok_elms_id");
    chist_potolok_elms_id.style.display = 'none';
    
    edItogo_id =  document.getElementById("itogo_id");
    oldScuare = 0;
    
    ed_fio = document.getElementById("fio_id");
    ed_tel = document.getElementById("phone_id");
    ed_sqr = document.getElementById("square_id");
    
    cher = document.getElementById("chernovoy_id");
    chist = document.getElementById("chistovaya_id");
    
    
}

function calc_itogo(){
    edItogo_id.value=+edItogo_id.value-oldScuare;
    oldScuare=0;
    oldScuare = +ed_sqr.value*4500;
    edItogo_id.value=+edItogo_id.value+oldScuare;
}

function chernovoy_clc(){
    block_set_visible(cher_elms_id);
}

function chistovaya_clc(){
    block_set_visible(chist_stena_elms_id);
    block_set_visible(chist_pol_elms_id);
    block_set_visible(chist_potolok_elms_id);
}

function block_set_visible(id){
    if (id.checked) {
        if (id.style.display == "none")
        id.style.display = 'block';
        else id.style.display = 'none';
    }
    else {
        if (id.style.display == "block")
        id.style.display = 'none';
        else id.style.display = 'block';
    }
    if (id.style.display != "block") {
        var items = id.getElementsByTagName("input"), len, i;
        // Здесь, увы цикл по элементам формы:
        for (i = 0, len = items.length; i < len; i += 1) {
            // Если текущий элемент является чекбоксом...
            if (items.item(i).type && items.item(i).type === "checkbox") 
                if (items.item(i).checked) { items.item(i).checked = false; items.item(i).onchange();}
        }
    }
}

function check_calc_clc(obj){
    var chern_vir_sten_id = document.getElementById("chern_vir_sten_id");
    var chern_vir_pol_id = document.getElementById("chern_vir_pol_id");
    var chern_molyarnie_id = document.getElementById("chern_molyarnie_id");
    
    var chistovaya_stena_pokraska_id = document.getElementById("chistovaya_stena_pokraska_id");
    var chistovaya_stena_oboi_id = document.getElementById("chistovaya_stena_oboi_id");    
    var chistovaya_stena_shum_id = document.getElementById("chistovaya_stena_shum_id");    
    var chistovaya_pol_uteplenie_id = document.getElementById("chistovaya_pol_uteplenie_id");    
    var chistovaya_pol_shum_id = document.getElementById("chistovaya_pol_shum_id");    
    var chistovaya_pol_linolium_id = document.getElementById("chistovaya_pol_linolium_id");    
    var chistovaya_pol_parket_id = document.getElementById("chistovaya_pol_parket_id");    
    var chistovaya_potolok_shum_id = document.getElementById("chistovaya_potolok_shum_id");    
    var chistovaya_potolok_pobelka_id = document.getElementById("chistovaya_potolok_pobelka_id");    
    var chistovaya_potolok_pokraska_id = document.getElementById("chistovaya_potolok_pokraska_id");    
    var chistovaya_potolok_nat_id = document.getElementById("chistovaya_potolok_nat_id");    
    
    var itogo_id=document.getElementById("itogo_id");
    
    if (obj=='chern_vir_sten_id' && chern_vir_sten_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.2;
    else if (obj=='chern_vir_sten_id' && chern_vir_sten_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.2;
    else if (obj=='chern_vir_pol_id' && chern_vir_pol_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.1;
    else if (obj=='chern_vir_pol_id' && chern_vir_pol_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.1;
    else if (obj=='chern_molyarnie_id' && chern_molyarnie_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.15;
    else if (obj=='chern_molyarnie_id' && chern_molyarnie_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.15;

    else if (obj=='chistovaya_stena_pokraska_id' && chistovaya_stena_pokraska_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.3;
    else if (obj=='chistovaya_stena_pokraska_id' && chistovaya_stena_pokraska_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.3;
    else if (obj=='chistovaya_stena_oboi_id' && chistovaya_stena_oboi_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.25;
    else if (obj=='chistovaya_stena_oboi_id' && chistovaya_stena_oboi_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.25;
    else if (obj=='chistovaya_stena_shum_id' && chistovaya_stena_shum_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.35;
    else if (obj=='chistovaya_stena_shum_id' && chistovaya_stena_shum_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.35;
    else if (obj=='chistovaya_pol_uteplenie_id' && chistovaya_pol_uteplenie_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.4;
    else if (obj=='chistovaya_pol_uteplenie_id' && chistovaya_pol_uteplenie_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.4;
    else if (obj=='chistovaya_pol_shum_id' && chistovaya_pol_shum_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.15;
    else if (obj=='chistovaya_pol_shum_id' && chistovaya_pol_shum_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.15;
    else if (obj=='chistovaya_pol_linolium_id' && chistovaya_pol_linolium_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.05;
    else if (obj=='chistovaya_pol_linolium_id' && chistovaya_pol_linolium_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.05;
    else if (obj=='chistovaya_pol_parket_id' && chistovaya_pol_parket_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.45;
    else if (obj=='chistovaya_pol_parket_id' && chistovaya_pol_parket_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.45;
    else if (obj=='chistovaya_potolok_shum_id' && chistovaya_potolok_shum_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.4;
    else if (obj=='chistovaya_potolok_shum_id' && chistovaya_potolok_shum_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.4;
    else if (obj=='chistovaya_potolok_pobelka_id' && chistovaya_potolok_pobelka_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.2;
    else if (obj=='chistovaya_potolok_pobelka_id' && chistovaya_potolok_pobelka_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.2;
    else if (obj=='chistovaya_potolok_pokraska_id' && chistovaya_potolok_pokraska_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.35;
    else if (obj=='chistovaya_potolok_pokraska_id' && chistovaya_potolok_pokraska_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.35;
    else if (obj=='chistovaya_potolok_nat_id' && chistovaya_potolok_nat_id.checked==true) itogo_id.value=+itogo_id.value+1000*1.4;
    else if (obj=='chistovaya_potolok_nat_id' && chistovaya_potolok_nat_id.checked==false) itogo_id.value=+itogo_id.value-1000*1.4;
    
}

function  export_excel(){
    var ep = new ExcelPlus();
    ep.createFile("Book1");
//            .write({"content": [["A1", "B1", "C1"]]})
//            .createSheet("Book2")
//            .write({"cell": "A1", "content": "A1"})
//    ep.writeRow(5, [ed_fio.value, ed_tel.value]);

    ep.write({"sheet": "Book1", "cell": "A1", "content": new Date()});
    ep.writeRow(2, ["Расчет стоимости ремонта по выбранным параметрам"]);
    ep.writeRow(4, ["ФИО"]);
    ep.writeRow(5, [ed_fio.value]);
    ep.writeRow(7, ["Телефон"]);
    ep.writeRow(8, [ed_tel.value]);
    ep.writeRow(10, ["Площадь","","","","","Стоимость"]);
    ep.writeRow(11, [ed_sqr.value,"","","","",+ed_sqr.value*4500]);
    ep.writeRow(13, ["Был выбран тип ремонта:"]);//7
    var flag=0;
    if (cher.checked) {
        ep.writeRow(15, ["", "Черновой"]);
        flag=Check_elms_import(ep,cher_elms_id,16,"");
    }
    if (chist.checked) {
        var k;
        k=flag+17;
        ep.writeRow(k, ["", "Чистовая отделка"]);

        var d=Check_elms_import(ep,chist_stena_elms_id,k+1,"Стены");
        var b=Check_elms_import(ep,chist_pol_elms_id,k+d+2,"Полы");
        flag=Check_elms_import(ep,chist_potolok_elms_id,k+d+b+3,"Потолок");
        flag=k+d+b+3+flag;
    }
    if (flag==0) flag=14;
    if (flag<4) flag=flag+16;
    ep.writeRow(flag+2, ["","","","Итого","",+edItogo_id.value]);
    ep.saveAs("calc_report.xlsx");
}

function Check_elms_import(ep,id,k,pt){
        var c=0;
        var items = id.getElementsByTagName("input"), len;
        if (pt!="") { ep.writeRow(k, ["", "", pt]); k++;}
        // Здесь, увы цикл по элементам формы:
        for (i = 0, len = items.length; i < len; i += 1) {
            // Если текущий элемент является чекбоксом...
            if (items.item(i).type && items.item(i).type === "checkbox")
                if (items.item(i).checked) {
                    ep.writeRow(k+c, ["", "", "",items.item(i).parentNode.innerText,"",+items.item(i).value*1000]);
                    c++;
                }
        }
    return c;
}