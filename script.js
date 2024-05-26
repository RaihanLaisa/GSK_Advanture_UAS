//menu
document.addEventListener('DOMContentLoaded', function () {
    var isLoggedIn = false; // Ubah sesuai dengan status login pengguna

    if (isLoggedIn) {
        document.querySelector('.login-btn').style.display = 'none';
        document.querySelector('.register-btn').style.display = 'none';
    } else {
        document.querySelector('.logout-btn').style.display = 'none';
    }
}); //

var tombolMenu = $(".tombol-menu");
var menu = $("nav .menu ul");

function klikMenu() {
    tombolMenu.click(function () {
        menu.toggle();
    });
    menu.click(function () {
        menu.toggle();
    });
}

$(document).ready(function () {
    var width = $(window).width();
    if (width < 990) {
        klikMenu();
    }
})

//check lebar
$(window).resize(function () {
    var width = $(window).width();
    if (width > 989) {
        menu.css("display", "block");
        //display:block
    } else {
        menu.css("display", "none");
    }
    klikMenu();
});
//Mengatur perilaku menu dropdown saat lebar layar berubah.



//efek scroll NAV BAR
$(document).ready(function () {
    var scroll_pos = 0;
    $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 0) {
            $("nav").addClass("putih");
            $("nav img.hitam").show();
            $("nav img.putih").hide();
        } else {
            $("nav").removeClass("putih");
            $("nav img.hitam").hide();
            $("nav img.putih").show();
        }
    })
});
//

//Menampilkan dan menyembunyikan submenu saat tombol menu diklik.
document.addEventListener('DOMContentLoaded', function () {
    var tombolMenu = document.querySelector('.tombol-menu');
    var submenu = document.querySelector('.submenu');

    tombolMenu.addEventListener('click', function () {
        if (submenu.style.display === 'none' || submenu.style.display === '') {
            submenu.style.display = 'block';
        } else {
            submenu.style.display = 'none';
        }
    });
});


// Ambil elemen modal dan tombol "Book Now"
var modal = document.getElementById('book');
var bookNowBtn = document.getElementById('bookNowBtn');

// Tambahkan event listener untuk menampilkan modal saat tombol "Book Now" diklik
bookNowBtn.addEventListener('click', function() {
  modal.style.display = "block";
});

// Ambil elemen modal dan tombol "Book Now"
var modal = document.getElementById('book');
var closeBtn = document.getElementById('closeBtn');

// Tambahkan event listener untuk menutup modal saat tombol close diklik
closeBtn.addEventListener('click', function() {
  modal.style.display = "none";
  // Kembali ke halaman sebelumnya
  history.back();
});


  
