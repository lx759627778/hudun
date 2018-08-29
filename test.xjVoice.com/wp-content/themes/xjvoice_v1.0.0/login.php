 <!-- login 弹窗 -->
    <div class="pop-mask js-login-mask"></div>
    <div class="pop-box middle js-login-pop">
        <i class="pop-close js-login-close"></i>
        <div class="pop-header">
            <h6>注册登录</h6>
        </div>
        <div class="pop-ctt">
            <p class="login-p">验证即登录，未注册将自动创建迅捷云服务帐号</p>
            <div class="login-from">
                <input class="login-tel" type="text" placeholder="请输入手机号">
                <div class="login-Code">
                    <input type="text" placeholder="请输入图形校验码">
                    <img src="" alt="">
                </div>
                <div class="login-Code">
                    <input type="text" placeholder="请输入短信验证码">
                    <button type="button">发送验证码</button>
                </div>
                <button class="login-submit" type="button">登录</button>
            </div>
            <div class="Quick-login">
                <h6><span>快捷方式登录</span></h6>
                <div class="Quick-login-list">
                    <a class="icon-qq" href=""></a>
                    <a class="icon-wx" href=""></a>
                </div>
            </div>
        </div>
    </div>
    <script>
            $(".js-login-close").click(function(){
                 $(".js-login-mask").hide();
                 $(".js-login-pop").hide();
            })
        </script>