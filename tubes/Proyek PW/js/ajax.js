// ambil element yang dibutuhkan

var keyword = document.getElementById('keyword');
var tombolcari = document.getElementById('tombol-cari');
var container = document.getElementById('ajax');

// tambahkan event ketika keyword ditulis

keyword.addEventListener('keyup',function(){
    // buat object ajax
    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax nya
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status == 200){
            container.innerHTML=xhr.responseText;
        }
    }

    //eksekusi ajax
    xhr.open('GET','ajax/murid.php?keyword=' + keyword.value, true);
    xhr.send();


});