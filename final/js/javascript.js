function cari() {// fungsi cari
var kata = document.formcari.keyword.value;//untuk variabel kata berisi data yang diambil dari form sebelumnya
var hasil = "http://www.google.com/search?q=" + kata ; //untuk variabel hasil berisi data yang diambil dari google
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')//untuk membuka windows baru pada data yang dicari
}
//untuk menampilkan data yang dicari
    