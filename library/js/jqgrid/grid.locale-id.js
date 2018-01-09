;(function($){
/**
 * jqGrid English Translation
 * Tony Tomov tony@trirand.com
 * http://trirand.com/blog/ 
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
**/
$.jgrid = {};

$.jgrid.defaults = {
	recordtext: "Baris",
	loadtext: "Loading...",
	pgtext : "/"
};
$.jgrid.search = {
    caption: "Pencarian...",
    Find: "Cari",
    Reset: "Reset",
    odata : ['sama dengan', 'tidak sama dengan', 'lebih kecil', 'lebih kecil sama dengan','lebih besar','lebih besar sama dengan', 'dimulai dengan','diakhiri dengan','mengandung' ]
};
$.jgrid.edit = {
    addCaption: "Tambah Data",
    editCaption: "Edit Data",
    bSubmit: "Proses",
    bCancel: "Batal",
	bClose: "Tutup",
    processData: "Diproses...",
    msg: {
        required:"Kolom dibutuhkan",
        number:"Mohon, masukan angka yang benar",
        minValue:"Nilai harus lebih besar dari atau sama dengan",
        maxValue:"Nilai harus lebih kecil dari atau sama dengan",
        email: "bukan tulisan email yang benar",
        integer: "Mohon, masukan nilai bilangan yang benar",
		date: "Mohon, masukan nilai tanggal yang benar"
    }
};
$.jgrid.del = {
    caption: "Hapus",
    msg: "Hapus data(-data) yang dipilih?",
    bSubmit: "Hapus",
    bCancel: "Batal",
    processData: "Diproses..."
};
$.jgrid.nav = {
	edittext: " ",
    edittitle: "Edit baris yang dipilih",
	addtext:" ",
    addtitle: "Tambah baris baru",
    deltext: " ",
    deltitle: "Hapus baris yang dipilih",
    searchtext: " ",
    searchtitle: "Cari data(-data)",
    refreshtext: "",
    refreshtitle: "Panggil Ulang Grid",
    alertcap: "Perhatian",
    alerttext: "Mohon, pilih baris"
};
// setcolumns module
$.jgrid.col ={
    caption: "Tampilkan/Sembunyikan Kolom(-kolom)",
    bSubmit: "Proses",
    bCancel: "Batal"	
};
$.jgrid.errors = {
	errcap : "Error",
	nourl : "Tidak ada url yang diset",
	norecords: "Tidak ada data untuk diproses"
};
})(jQuery);
