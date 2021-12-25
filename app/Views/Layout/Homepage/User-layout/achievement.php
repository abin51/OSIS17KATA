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