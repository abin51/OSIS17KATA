<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- navigasi menu -->
<?= $this->include("Layout/NavMenu");?>
<!-- halaman pengguna -->
<div class="user-page">
    <!-- pengguna -->
    <div class="user">
        <!-- informasi pengguna -->
        <?= $this->include("Layout/Homepage/User-layout/user-info");?>
        
        <!-- tambahkan postingan -->
        <?= $this->include("Layout/Homepage/User-layout/add-post");?>

        <!-- postingan -->
        <?= $this->include("Layout/Homepage/User-layout/user-post");?>
    </div>
        
    <!-- dashboard halaman pengguna -->
    <div class="user-dashboard">
        <!-- jam dan cuaca -->
        <?= $this->include("Layout/Homepage/User-layout/clockwet");?>

        <!-- trafik website -->
        <?= $this->include("Layout/Homepage/User-layout/trafik");?>

        <!-- kegiatan harian -->
        <div class="rounded todo">
            <!-- todo navigasi -->
            <form class="todo-nav">
                <!-- input todo -->
                <input type="text" placeholder="Tambahkan kegiatan ..." name="todo-input" id="todo-input" class="Thisform rounded-pill todo-input">
                <input type="text" placeholder="jam ..." name="time-todo-input" id="time-todo-input" class="Thisform rounded-pill time-todo-input">

                <!-- btn submit todo -->
                <button class="Thislink Thisbtn btn-todo"><i class="fa fa-fw fa-plus"></i></button>

                <!-- statistik todo -->
                <a href="" class="Thislink btn-settodo"><i class="fa fa-fw fa-chart-bar"></i></a>
            </form>

            <!-- todo konten -->
            <div class="rounded todo-content">
                <!-- list todo -->
                <div class="rounded list-todo-content">
                    <!-- list info kiri -->
                    <div class="list-left-info">
                        <!-- input check -->
                        <input type="checkbox" name="check-todo" id="check-todo" class="d-none check-todo">
                        <label for="check-todo" class="rounded-circle todo-input-check"></label>
                        
                        <!-- teks list todo -->
                        <div class="text-list">Lorem ipsum dolor sit amet.</div>
                    </div>

                    <!-- list info kanan -->
                    <div class="list-right-info">
                        <span class="time-todo">12.30</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- pencapaian -->
        <div class="rounded achievement">
            <div class="achievement-progress">
                <div class="rounded-circle circle">
                    <div class="bar"></div>
                    <div class="rounded-circle box"><span></span></div>
                </div>
            </div>

            <div class="achievement-progress js">
                <div class="circle">
                    <div class="bar"></div>
                    <div class="rounded-circle box"><span></span></div>
                </div>
            </div>

            <div class="achievement-progress react">
                <div class="circle">
                    <div class="bar"></div>
                    <div class="rounded-circle box"><span></span></div>
                </div>
            </div>
            
            <div class="achievement-progress react">
                <div class="circle">
                    <div class="bar"></div>
                    <div class="rounded-circle box">
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="achievement-progress react">
                <div class="circle">
                    <div class="bar"></div>
                    <div class="rounded-circle box"><span></span></div>
                </div>
            </div>

            <div class="achievement-progress react">
                <div class="circle">
                    <div class="bar"></div>
                    <div class="rounded-circle box"><span></span></div>
                </div>
            </div>

            <div class="achievement-progress react">
                <div class="circle">
                    <div class="bar"></div>
                    <div class="rounded-circle box"><span></span></div>
                </div>
            </div> 
        </div>
            
        <script>
        let options = {
            startAngle: -1.55,
            size: 250,
            value: 0.9,  // nilai proses 1
            fill: {gradient: ['#3E00FF', '#AE00FB']}
        }

        $(".circle .bar").circleProgress(options).on('circle-animation-progress',
        function(event, progress, stepValue){
            $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
        });

        // proses 2
        $(".js .bar").circleProgress({
            value: 0.70
        });

        // proses 3
        $(".react .bar").circleProgress({
            value: 0.60
        });
        </script>

        <!-- postingan pilihan -->
        <div class="rounded featured-post">
            <div class="Thislink fp rounded"></div>
            <!-- <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div> -->
        </div>
    </div>
</div>
<?= $this->endSection();?>