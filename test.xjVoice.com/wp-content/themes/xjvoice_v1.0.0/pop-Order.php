<!-- 确认订单弹窗 -->
<link rel="stylesheet" type="text/css" href="<?php echo mySrc();?>/css/pop-order.css">
<div class="Order-mask"></div>
<div class="Order-pop">
    <div class="Order-header">
        <h6>确认订单信息</h6>
        <i></i>
    </div>
    <div class="Order-ctt">
        <div class="Order-from-li">
            <h6><span>*</span>订单名称：</h6>
            <div class="Order-from-right">
                <input type="text">
            </div>
        </div>
        <div class="Order-from-li">
            <h6><span>*</span>专业领域：</h6>
            <div class="Order-from-right">
                <label for="linyu1"><input type="radio" id="linyu1" name="linyu">通用聊天</label>
                <label for="linyu2"><input type="radio" id="linyu2" name="linyu">会议办公</label>
                <label for="linyu3"><input type="radio" id="linyu3" name="linyu">情感写作</label>
                <label for="linyu4"><input type="radio" id="linyu4" name="linyu">教育培训</label>
                <label for="linyu5"><input type="radio" id="linyu5" name="linyu">新闻媒体</label>
                <label for="linyu6"><input type="radio" id="linyu6" name="linyu">IT科技</label>
                <label for="linyu7"><input type="radio" id="linyu7" name="linyu">影视娱乐</label>
                <label for="linyu8"><input type="radio" id="linyu8" name="linyu">财经金融</label>
            </div>
        </div>
        <div class="Order-from-li">
            <h6>订单名称：</h6>
            <div class="Order-from-right">
                <input type="text">
                <p>点击可修改手机号码</p>
            </div>
        </div>
        <button class="confirm-order" type="button">确认订单</button>
    </div>
</div>