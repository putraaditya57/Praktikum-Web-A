var a;
var b;
var hasil;
var opr;
var opr_seleksi = false;
function button(angka) {
	var display = document.getElementById("output").value;
    switch (display){
        case "0" :
            display = angka;
        break;
        default:
            display += angka;
    }
    document.getElementById("output").value = display;
}

function clr() {
	document.getElementById("output").value = "0";
	a = 0;
	b = 0;
	opr_seleksi = false;
}

function koma() {
	var display = document.getElementById("output").value;
	if (display.includes(".") == false) {
		display += ".";
	}
	document.getElementById("output").value = display;
}

function button_opr(o) {
	opr_seleksi = true;
	a = parseFloat(document.getElementById("output").value);
	opr = o;
	document.getElementById("output").value = "0";
}

function hitung() {
	if (opr_seleksi == true) {
		b = parseFloat(document.getElementById("output").value);
		switch(opr){
			case 1 :
				hasil = a * b;
				document.getElementById("output").value = hasil;
				break;
			case 2 :
				hasil = a / b;
				document.getElementById("output").value = hasil;
				break;
			case 3 :
				hasil = a - b;
				document.getElementById("output").value = hasil;
				break;
			case 4 :
				hasil = a + b;
				document.getElementById("output").value = hasil;
				break;
		}
		opr_seleksi = false
		hasil = 0;
		a = 0;
		b = 0;
    }
}
