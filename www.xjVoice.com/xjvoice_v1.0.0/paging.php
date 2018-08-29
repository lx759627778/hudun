<!-- 确认订单弹窗 -->
<link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/page.css">
<p class="post-counts" style="display: none;">200</p>
<div class="M-box"></div>

 <script src="<?php echo mySrc();?>/js/jquery.pagination.js"></script>
    <script>
        function paginationStyle(paginationName, postNum, listNum) {
            var currentPage = $(paginationName + ' .active').text();
            var lastPage = Math.ceil($(postNum).text() / listNum);
            if (currentPage == 1) {
                $(paginationName + ' .prev').css({
                    color: '#ccc',
                    borderColor: '#ccc',
                    cursor: 'default'
                });
            } else if (currentPage == lastPage) {
                $(paginationName + ' .next').css({
                    color: '#ccc',
                    borderColor: '#ccc',
                    cursor: 'default'
                });
            };
            if (lastPage == 1) {
                $(paginationName + ' .next').css({
                    color: '#ccc',
                    borderColor: '#ccc',
                    cursor: 'default'
                });
            };
        }

        function paginationInit(paginationName, postNum, listNum) {
            var str = window.location.href;
            var indexNum = str.lastIndexOf("\/");
            var pageNum = str.substring(indexNum + 1, str.length);
            $(paginationName).pagination({
                pageCount: Math.ceil($(postNum).text() / listNum),
                totalData:$(postNum).text(),
                jump: false,
                coping: true,
                homePage: '1',
                endPage: Math.ceil($(postNum).text() / listNum),
                prevContent: '上一页',
                nextContent: '下一页',
                count: 2,
                isHide: $(postNum).text() > listNum ? false : true,
                keepShowPN: $(postNum).text() > listNum ? true : false,
                current: Number(pageNum) > 0 ? pageNum : 1,
                jumpBtn: '确定',
                callback: function() {
                    var currentPage = $(paginationName + ' .active').text();
                    if (Number(pageNum) > 0 ? false : true) {
                        var newStr1 = str + '/page/' + currentPage;
                        window.location.href = newStr1;
                    } else {
                        var newStr2 = str.replace(pageNum, currentPage);
                        window.location.href = newStr2;
                    };
                    if ($('.jump-ipt').val() > Math.ceil($(postNum).text() / listNum)) {
                        alert('123123');
                    };
                }
            });
        }

        $(document).ready(function() {
            paginationInit('.M-box', '.post-counts', 10);
            paginationStyle('.M-box', '.post-counts',10);
        });
    </script>