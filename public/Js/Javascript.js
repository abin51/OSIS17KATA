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

// jam digital mulai
    
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
                "background" : "#57CC99",
            }
        );
        
        $(".list-todo-content").css (
            {
                "filter" : "brightness(50%)"
            }
        );
    });
// akhir