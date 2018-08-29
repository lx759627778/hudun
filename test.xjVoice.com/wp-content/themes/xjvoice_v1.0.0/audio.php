<div class="audio-player">
    <audio id="audio" src="<?php echo mySrc();?>/images/index/叶丽仪 - 上海滩.mp3"></audio>
    <i class="audio-play-pause js-play-btn"></i>
    <p class="audio-play-time"><span>00:30:00</span>/<span>01:00:00</span></p>
    <div class="audio-center">
        <h6>雾.mp3</h6>
        <div class="audio-progress">
            <div class="js-progress" style="width:0%;"><i></i></div>
        </div>
    </div>
</div>

<script>
    var audiodom = document.getElementById("audio");
    var audiotime;
    audiodom.oncanplay = function() {
        audiotime=parseInt(audiodom.duration);
        $(".audio-play-time>span").eq(1).text(formatDuring(parseInt(audiodom.duration)));
    }
    var timer;
    $(".js-play-btn").click(function() {
        if (audiodom.paused) {
            $(this).addClass("icon-play");
            audiodom.play();
            timer = setInterval(function() {
                $(".js-progress").css("width", audiodom.currentTime / audiodom.duration * 100 + "%");
                $(".audio-play-time>span").eq(0).text(formatDuring(parseInt(audiodom.currentTime)));
                if (audiodom.ended) {
                    $(".js-play-btn").removeClass("icon-play");
                    clearInterval(timer);
                }
            }, 10)
        } else {
            $(this).removeClass("icon-play");
            audiodom.pause();
            clearInterval(timer);
        }
    })

    $(".audio-progress").click(function(e){
        var domleft=$(this).offset().left;
        var eleft=getMousePosX(e);
        var progress=(eleft-domleft)/$(this).width()*100+"%";
        $(".js-progress").css("width", progress);
        audiodom.currentTime=audiotime*((eleft-domleft)/$(this).width());
    })

    function formatDuring(mss) {
        var hours = parseInt((mss % ( 60 * 60 * 24)) / ( 60 * 60));
        var minutes = parseInt((mss % ( 60 * 60)) / 60);
        var seconds = parseInt(mss % 60);
        hours = hours > 9 ? hours : "0" + hours;
        minutes = minutes > 9 ? minutes : "0" + minutes;
        seconds = seconds > 9 ? seconds : "0" + seconds;
        return hours + ":" + minutes + ":" + seconds;
    }
    function getMousePosX(event) {
       var e = event || window.event;
       var scrollX = document.documentElement.scrollLeft || document.body.scrollLeft;
       var x = e.pageX || e.clientX + scrollX;
       return x;
    }
</script>