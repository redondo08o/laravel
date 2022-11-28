var peso = document.getElementById("peso")
var talla = document.getElementById("talla")



function imc() {
    var p = peso.value
    var t = talla.value
    var imc = new Number();

    imc = p / (t * t);
    if (imc < 16) {
        document.getElementById("imc_detallado").innerHTML = `<div class="alert alert-danger" role="alert">
        Su indice de masa corporal esta en deficis energetico grado III.
      </div>`;
    }
    if (imc >= 16 && imc < 17) {
        document.getElementById("imc_detallado").innerHTML = `<div class="alert alert-danger" role="alert">
        Su indice de masa corporal esta en deficis energetico grado II.
      </div>`;
    }
    if (imc >= 17 && imc <= 18.4) {
        document.getElementById("imc_detallado").innerHTML = `<div class="alert alert-warning" role="alert">
        Su indice de masa corporal esta en deficis energetico grado I.
      </div>`;
    }
    if (imc > 18.5 && imc < 20) {
        document.getElementById("imc_detallado").innerHTML = `<div class="alert alert-info" role="alert">
        Su indice de masa corporal esta en normal bajo.
      </div>`;
    }
    if (imc > 20 && imc < 24) {
        document.getElementById("imc_detallado").innerHTML = `<div class="alert alert-success" role="alert">
        Su indice de masa corporal esta en normal.
      </div>`;
    }
    if (imc > 25 && imc < 26.9) {
        document.getElementById("imc_detallado").innerHTML = `<div class="alert alert-info" role="alert">
        Su indice de masa corporal esta en sobrepeso.
      </div>`;
    }
    if (imc > 27 && imc < 29.9) {
        document.getElementById("imc_detallado").innerHTML = `<div class="alert alert-warning" role="alert">
        Su indice de masa corporal esta en preobesidad.
      </div>`;
    }
    if (imc > 30 && imc < 34.9) {
        document.getElementById("imc_detallado").innerHTML = `<div class="alert alert-danger" role="alert">
        Su indice de masa corporal esta en obesidad grado I.
      </div>`;
    }
    if (imc > 35 && imc < 39.9) {
        document.getElementById("imc_detallado").innerHTML = `<div class="alert alert-danger" role="alert">
        Su indice de masa corporal esta en obesidad grado II.
      </div>`;
    }
    if (imc > 40 && imc < 49.9) {
        document.getElementById("imc_detallado").innerHTML = `<div class="alert alert-danger" role="alert">
        Su indice de masa corporal esta en obesidad grado III.
      </div>`;
    }
    if (imc >= 50) {
        document.getElementById("imc_detallado").innerHTML = `<div class="alert alert-danger" role="alert">
        Su indice de masa corporal esta en obesidad grado IV.
      </div>`;
    }
}


function test() {
    var f1 = "";
    var f1_1 = document.getElementById("f1.1");
    var f1_2 = document.getElementById("f1.2");
    var f1_3 = document.getElementById("f1.3");

    if (f1_1.checked) {
        f1 = f1_1.value;

    } else if (f1_2.checked) {
        f1 = f1_2.value;
    } else {
        f1 = f1_3.value;
    }
    var f01 = parseFloat(f1);
    console.log(f01)

    var f2 = "";
    var f2_1 = document.getElementById("f2.1");
    var f2_2 = document.getElementById("f2.2");
    var f2_3 = document.getElementById("f2.3");

    if (f2_1.checked) {
        f2 = f2_1.value;

    } else if (f2_2.checked) {
        f2 = f2_2.value;
    } else {
        f2 = f2_3.value;
    }
    var f02 = parseFloat(f2);
    console.log(f02)

    var familia_y_amigos = f01 + f02;
    console.log(familia_y_amigos)
    /////
    ////
    ////
    var a1 = "";
    var a1_1 = document.getElementById("a1.1");
    var a1_2 = document.getElementById("a1.2");
    var a1_3 = document.getElementById("a1.3");

    if (a1_1.checked) {
        a1 = a1_1.value;

    } else if (a1_2.checked) {
        a1 = a1_2.value;
    } else {
        a1 = a1_3.value;
    }
    var a01 = parseFloat(a1);
    console.log(a01)

    var a2 = "";
    var a2_1 = document.getElementById("a2.1");
    var a2_2 = document.getElementById("a2.2");
    var a2_3 = document.getElementById("a2.3");

    if (a2_1.checked) {
        a2 = a2_1.value;

    } else if (a2_2.checked) {
        a2 = a2_2.value;
    } else {
        a2 = a2_3.value;
    }
    var a02 = parseFloat(a1);
    console.log(a01)

    var activida_fisica = a01 + a02;
    console.log(activida_fisica)
    ////
    ////
    ////
    var n1 = "";
    var n1_1 = document.getElementById("n1.1");
    var n1_2 = document.getElementById("n1.2");
    var n1_3 = document.getElementById("n1.3");

    if (n1_1.checked) {
        n1 = n1_1.value;

    } else if (n1_2.checked) {
        n1 = n1_2.value;
    } else {
        n1 = n1_3.value;
    }
    var n01 = parseFloat(n1);
    console.log(n01)


    var n2 = "";
    var n2_1 = document.getElementById("n2.1");
    var n2_2 = document.getElementById("n2.2");
    var n2_3 = document.getElementById("n2.3");

    if (n2_1.checked) {
        n2 = n2_1.value;

    } else if (n2_2.checked) {
        n2 = n2_2.value;
    } else {
        n2 = n2_3.value;
    }
    var n02 = parseFloat(n2);
    console.log(n02)

    var n3 = "";
    var n3_1 = document.getElementById("n3.1");
    var n3_2 = document.getElementById("n3.2");
    var n3_3 = document.getElementById("n3.3");

    if (n3_1.checked) {
        n3 = n3_1.value;

    } else if (n3_2.checked) {
        n3 = n3_2.value;
    } else {
        n3 = n3_3.value;
    }
    var n03 = parseFloat(n3);
    console.log(n03)

    var nutricion = n01 + n02 + n03
    console.log(nutricion)

    //////
    ////
    ////

    var t1 = "";
    var t1_1 = document.getElementById("t1.1");
    var t1_2 = document.getElementById("t1.2");
    var t1_3 = document.getElementById("t1.3");

    if (t1_1.checked) {
        t1 = t1_1.value;

    } else if (t1_2.checked) {
        t1 = t1_2.value;
    } else {
        t1 = t1_3.value;
    }
    var t01 = parseFloat(t1);
    console.log(t01)


    var t2 = "";
    var t2_1 = document.getElementById("t2.1");
    var t2_2 = document.getElementById("t2.2");
    var t2_3 = document.getElementById("t2.3");

    if (t2_1.checked) {
        t2 = t2_1.value;

    } else if (t2_2.checked) {
        t2 = t2_2.value;
    } else {
        t2 = t2_3.value;
    }
    var t02 = parseFloat(t2);
    console.log(t02)

    var tavaco = t01 + t02
    console.log(tavaco)

    ///////////
    //////
    //
    //


    var a21 = "";
    var a21_1 = document.getElementById("a21.1");
    var a21_2 = document.getElementById("a21.2");
    var a21_3 = document.getElementById("a21.3");

    if (a21_1.checked) {
        a21 = a21_1.value;

    } else if (a21_2.checked) {
        a21 = a21_2.value;
    } else {
        a21 = a21_3.value;
    }
    var a021 = parseFloat(a21);
    console.log(a021)


    var a22 = "";
    var a22_1 = document.getElementById("a22.1");
    var a22_2 = document.getElementById("a22.2");
    var a22_3 = document.getElementById("a22.3");

    if (a22_1.checked) {
        a22 = a22_1.value;

    } else if (a22_2.checked) {
        a22 = a22_2.value;
    } else {
        a22 = a22_3.value;
    }
    var a022 = parseFloat(a22);
    console.log(a022)

    var a23 = "";
    var a23_1 = document.getElementById("a23.1");
    var a23_2 = document.getElementById("a23.2");
    var a23_3 = document.getElementById("a23.3");

    if (a23_1.checked) {
        a23 = a23_1.value;

    } else if (a23_2.checked) {
        a23 = a23_2.value;
    } else {
        a23 = a23_3.value;
    }
    var a023 = parseFloat(a23);
    console.log(a023)

    var alcohol = a021 + a022 + a023
    console.log(alcohol)

    ////
    ////
    ////

    var s1 = "";
    var s1_1 = document.getElementById("s.1");
    var s1_2 = document.getElementById("s.2");
    var s1_3 = document.getElementById("s.3");

    if (s1_1.checked) {
        s1 = s1_1.value;

    } else if (s1_2.checked) {
        s1 = s1_2.value;
    } else {
        s1 = s1_3.value;
    }
    var s01 = parseFloat(s1);
    console.log(s01)

    var s2 = "";
    var s2_1 = document.getElementById("s1.1");
    var s2_2 = document.getElementById("s1.2");
    var s2_3 = document.getElementById("s1.3");

    if (s2_1.checked) {
        s2 = s2_1.value;

    } else if (s2_2.checked) {
        s2 = s2_2.value;
    } else {
        s2 = s2_3.value;
    }
    var s02 = parseFloat(s2);
    console.log(s02)


    var s3 = "";
    var s3_1 = document.getElementById("s2.1");
    var s3_2 = document.getElementById("s2.2");
    var s3_3 = document.getElementById("s2.3");

    if (s3_1.checked) {
        s3 = s3_1.value;

    } else if (s3_2.checked) {
        s3 = s3_2.value;
    } else {
        s3 = s3_3.value;
    }
    var s03 = parseFloat(s3);
    console.log(s03)

    var sueño_y_estres = s01 + s02 + s03
    console.log(sueño_y_estres)

    ////
    ////
    ///

    var t21 = "";
    var t21_1 = document.getElementById("t21.1");
    var t21_2 = document.getElementById("t21.2");
    var t21_3 = document.getElementById("t21.3");

    if (t21_1.checked) {
        t21 = t21_1.value;

    } else if (t21_2.checked) {
        t21 = t21_2.value;
    } else {
        t21 = t21_3.value;
    }
    var t021 = parseFloat(t21);
    console.log(t021)

    var t22 = "";
    var t22_1 = document.getElementById("t22.1");
    var t22_2 = document.getElementById("t22.2");
    var t22_3 = document.getElementById("t22.3");

    if (t22_1.checked) {
        t22 = t22_1.value;

    } else if (t22_2.checked) {
        t22 = t22_2.value;
    } else {
        t22 = t22_3.value;
    }
    var t022 = parseFloat(t22);
    console.log(t022)

    var tipo_de_personalida = t021 + t022
    console.log(tipo_de_personalida)
    ///
    ///
    ///


    var i1 = "";
    var i1_1 = document.getElementById("i1.1");
    var i1_2 = document.getElementById("i1.2");
    var i1_3 = document.getElementById("i1.3");

    if (i1_1.checked) {
        i1 = i1_1.value;

    } else if (i1_2.checked) {
        i1 = i1_2.value;
    } else {
        i1 = i1_3.value;
    }
    var i01 = parseFloat(i1);
    console.log(i01)

    var i2 = "";
    var i2_1 = document.getElementById("i2.1");
    var i2_2 = document.getElementById("i2.2");
    var i2_3 = document.getElementById("i2.3");

    if (i2_1.checked) {
        i2 = i2_1.value;

    } else if (i2_2.checked) {
        i2 = i2_2.value;
    } else {
        i2 = i2_3.value;
    }
    var i02 = parseFloat(i2);
    console.log(i02)

    var i3 = "";
    var i3_1 = document.getElementById("i3.1");
    var i3_2 = document.getElementById("i3.2");
    var i3_3 = document.getElementById("i3.3");

    if (i3_1.checked) {
        i3 = i3_1.value;

    } else if (i3_2.checked) {
        i3 = i3_2.value;
    } else {
        i3 = i3_3.value;
    }
    var i03 = parseFloat(i3);
    console.log(i03)

    var introspeccion = i01 + i02 + i03
    console.log(introspeccion)

    ////
    ///
    ///

    var c1 = "";
    var c1_1 = document.getElementById("c1.1");
    var c1_2 = document.getElementById("c1.2");
    var c1_3 = document.getElementById("c1.3");

    if (c1_1.checked) {
        c1 = c1_1.value;

    } else if (c1_2.checked) {
        c1 = c1_2.value;
    } else {
        c1 = c1_3.value;
    }
    var c01 = parseFloat(c1);
    console.log(c01)

    var c2 = "";
    var c2_1 = document.getElementById("c2.1");
    var c2_2 = document.getElementById("c2.2");
    var c2_3 = document.getElementById("c2.3");

    if (c2_1.checked) {
        c2 = c2_1.value;

    } else if (c2_2.checked) {
        c2 = c2_2.value;
    } else {
        c2 = c2_3.value;
    }
    var c02 = parseFloat(c2);
    console.log(c02)

    var conducion_y_travajo = c01 + c02
    console.log(conducion_y_travajo)

    ////
    ///
    ///


    var o1 = "";
    var o1_1 = document.getElementById("o1.1");
    var o1_2 = document.getElementById("o1.2");
    var o1_3 = document.getElementById("o1.3");

    if (o1_1.checked) {
        o1 = o1_1.value;

    } else if (o1_2.checked) {
        o1 = o1_2.value;
    } else {
        o1 = o1_3.value;
    }
    var o01 = parseFloat(o1);
    console.log(o01)

    var o2 = "";
    var o2_1 = document.getElementById("o2.1");
    var o2_2 = document.getElementById("o2.2");
    var o2_3 = document.getElementById("o2.3");

    if (o2_1.checked) {
        o2 = o2_1.value;

    } else if (o2_2.checked) {
        o2 = o2_2.value;
    } else {
        o2 = o2_3.value;
    }
    var o02 = parseFloat(o2);
    console.log(o02)

    var o3 = "";
    var o3_1 = document.getElementById("o3.1");
    var o3_2 = document.getElementById("o3.2");
    var o3_3 = document.getElementById("o3.3");

    if (o3_1.checked) {
        o3 = o3_1.value;

    } else if (o3_2.checked) {
        o3 = o3_2.value;
    } else {
        o3 = o3_3.value;
    }
    var o03 = parseFloat(o3);
    console.log(o03)

    var otras_drogas = o01 + o02 + o03
    console.log(otras_drogas)

    var res = familia_y_amigos + activida_fisica + nutricion + tavaco + alcohol + sueño_y_estres + tipo_de_personalida + introspeccion + conducion_y_travajo + otras_drogas;
    console.log(res)

    var ress = res * 2
    console.log(ress)

    if (ress >= 0 && ress < 46) {
        document.getElementById("respuesta").innerHTML = `<div class="alert alert-danger" role="alert">
        Estas en zona de peligro con un puntaje de ${ress} 
      </div>`;
    }
    if (ress >= 47 && ress <= 72) {
        alert("hola 1")
        document.getElementById("respuesta").innerHTML = `<div class="alert alert-warning" role="alert">
        algo bajo, podrias mejorar con un puntaje de ${ress} 
      </div>`;

    }
    if (ress >= 73 && ress <= 84) {
        alert("hola 2")
        document.getElementById("respuesta").innerHTML = `<div class="alert alert-info" role="alert">
        adecuado,estas bien con un puntaje de ${ress} 
      </div>`;

    }
    if (ress >= 85 && ress <= 102) {
        alert("hola 3")
        document.getElementById("respuesta").innerHTML = `<div class="alert alert-info" role="alert">
        buen trabajo estas en el camino correcto con un puntaje de ${ress} 
      </div>`;
    }
    if (ress >= 103 && ress <= 120) {
        alert("hola 4")
        document.getElementById("respuesta").innerHTML = `<div class="alert alert-alert-success" role="alert">
        felicitaciones tienes un estilo de vida fantastico con un puntaje de  ${ress} 
      </div>`;
    }

}

function uno() {
    var rm = document.getElementById("1rm").value;
    var res = (102.78 - 2.78) * rm;
    document.getElementById("res_1rm").innerHTML = `<div class="alert alert-info" role="alert">
        tu test 1rm dio como resultado ${res} 
      </div>`;
}