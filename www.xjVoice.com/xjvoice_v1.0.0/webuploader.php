<!-- 确认订单弹窗 -->
<link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/webuploader/css/uploaderpaper.css">
<div id="uploader" class="wu-example">
    <!--用来存放文件信息-->
    <div id="thelist" class="uploader-list"></div>
    <div class="btns">
        <div id="picker">选择文件</div>
        <button id="ctlBtn" class="btn btn-default" style="display:none;">开始上传</button>
    </div>
</div>
<div class="uploader-box">

</div>


<script src="<?php echo mySrc();?>/webuploader/js/webuploader.min.js"></script>
<script>
    var uploader = WebUploader.create({

        // swf文件路径
        swf: '//test.xjvoice.com/wp-content/themes/xjvoice_v1.0.0/webuploader/js/Uploader.swf',

        // 文件接收服务端。
        server: '',

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: '#picker',

        // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
        resize: false,
        accept: {
            title: '',
            extensions: 'mp3,wav,pcm,m4a,wma',
            mimeTypes: 'audio/*'
        },
        onError: function() {
                     console.log("error");
                    }
    });

    //当有文件被添加进队列的时候
    uploader.on('fileQueued', function(file) {
        var audiotype = file.type;
        var typeindex = audiotype.lastIndexOf("\/");
        var typeclass = audiotype.substring(typeindex + 1, audiotype.length);
        var audiohtml = ' <div id="audio-' + file.id + '" class="Upload-video-li icon-' + typeclass + ' upload-wait">' +
            '<div class="Upload-video-ctt">' +
            '<div class="Upload-video-text">' +
            '<p>' + file.name + '</p>' +
            '<span class="js-upload-state">等待上传</span>' +
            '</div>' +
            '<div class="progress-bg">' +
            '<div class="progress-scale"></div>' +
            '</div>' +
            '</div>' +
            '<i class="remove-video"></i>' +
            '</div>';
        $(".Upload-video-list").append(audiohtml);
        $("#picker").hide();
        $("#ctlBtn").show();
    });

    // 文件上传过程中创建进度条实时显示。
    uploader.on('uploadProgress', function(file, percentage) {
        $("#audio" + file.id).find(".progress-scale").css('width', percentage * 100 + '%');
    });

    //增加：某个文件开始上传前触发，一个文件只会触发一次。
    uploader.on('uploadStart', function(file) {
        console.log("hello");
        $("#audio" + file.id).removeClass("upload-wait");
        $("#audio" + file.id).find(".js-upload-state").text('上传中');
    });



    uploader.on('uploadSuccess', function(file) {
        console.log("hello1");
        $("#audio" + file.id).find(".progress-scale").text('已上传');
    });

    uploader.on('uploadError', function(file) {
        console.log("hello2");
        $("#audio" + file.id).find(".progress-scale").text('上传出错');
    });

    uploader.on('uploadComplete', function(file) {
        console.log("hello3");
        $('#' + file.id).find('.progress').fadeOut();
    });
</script>