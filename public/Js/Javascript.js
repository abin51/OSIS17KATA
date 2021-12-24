// notifikasi pengguna
    $("#user-notification").click(function () {
        $(".user-notification-content").css (
            {
                "right" : "1vh"
            }
        );

        $(".close-notification").css(
            {
                "top" : "0"
            }
        );
    });

    $(".close-notification").click(function() {
        $(".close-notification").css(
            {
                "top" : "-50vh"
            }
        );

        $(".user-notification-content").css(
            {
                "right" : "-100vh"
            }
        );
    });
// akhir

// menu dropdown pengguna mulai
    $(".user-img").click(function() {
        $(".dropdown-user").css(
            {
                "top" : "7vh"
            }
        );

        $(".close-dropdown").css(
            {
                "top" : "0"
            }
        );
    });

    $(".close-dropdown").click(function() {
        $(".dropdown-user, .close-dropdown").css(
            {
                "top" : "-50vh"
            }
        );
    });
// akhir

// status pengguna mulai
    $("#user-status").click(function() {
        alert("status oke");
    });
// akhir 

// status pengguna mulai
    $(".post-image").click(function() {
        $(".post-image").toggleClass("h-auto");
    });
// akhir 

// jam digital mulai
    setInterval(() => {
        var waktu = new Date();
        // kalender
        var tahun = waktu.getFullYear();
        var hari = waktu.getDay();
        var tanggal = waktu.getDate();

        // kalender
        document.getElementById("year-calendar").innerHTML = tahun;
        document.getElementById("day-calendar").innerHTML = hari + " ";

        if (hari < 10) {
            document.getElementById("day-calendar").innerHTML = "0" + hari + "," + " ";
        }

        // jam
        var jam = waktu.getHours();
        var menit = waktu.getMinutes();
        var detik = waktu.getSeconds();
        var milidetik = waktu.getMilliseconds();

        // jam
        document.getElementById("hour-clock").innerHTML = jam;
        document.getElementById("minute-clock").innerHTML = menit + ":";
        document.getElementById("second-clock").innerHTML = detik;
        document.getElementById("mi-second").innerHTML = milidetik;

        if (jam < 10 ) {
            document.getElementById("hour-clock").innerHTML = "0"  + jam;
        }

        if (menit < 10) {
            document.getElementById("minute-clock").innerHTML = "0" + menit + ":";
        }

        if (detik < 10) {
            document.getElementById("second-clock").innerHTML = "0" + detik;
        }

        if (milidetik < 100) {
            document.getElementById("mi-second").innerHTML = "0" + milidetik;
        }

        if (milidetik < 10) {
            document.getElementById("mi-second").innerHTML = "00" + milidetik;
        }

        // pengubah icon siang dan malam
            if (detik > 18 ) {
                var changeDayIcon = document.getElementById("changeDay");
                changeDayIcon.classList.remove("fa-sun");
                changeDayIcon.classList.add("fa-moon");
            } 
            if (detik > 6 && detik < 18) {
                var changeDayIcon = document.getElementById("changeDay");
                changeDayIcon.classList.remove("fa-moon");
                changeDayIcon.classList.add("fa-sun");
            }
        // akhir
    }, 1);
// akhir

// dashboard pengguna mulai
    $("#ds-user-image").click(function() {
        alert("gamber oke");
    });

    $("#ds-user-post").click(function() {
        alert("post oke");
    });

    $("#ds-user-storage").click(function() {
        alert("penyimpanan oke");
    });
// akhir

// todo list check mulai
    $(".list-todo-content").click(function() {
        $(".todo-input-check").css (
            {
                "background" : "#F98404",
            }
        );
        
        $(".list-todo-content").css (
            {
                "filter" : "brightness(20%)"
            }
        );
    });
// akhir