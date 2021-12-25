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