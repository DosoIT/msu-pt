{{--ยังไม่ login--}}
<div class="navbar navbar-xs navbar-default borColor">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">My Project</a>
    </div>
    <div class="navbar-collapse collapse" id="searchbar">
        <ul class="nav navbar-nav navbar-right">
            <li><a data-toggle="modal" data-target=".bs-example-modal-sm" style="cursor: pointer"><i class="glyphicon glyphicon-lock"></i> สมัครสมาชิก/เข้าสู่ระบบ</a></li>
        </ul>
    </div>
</div>
{{--จบ--}}
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
<script>
    $(document).ready(function () {
        var colors = ["#ff33ac", "#f44336", "#ffff00", "00ffff", "#FF5733", "#2ECC71", "#3498DB", "#8E44AD"];
        var ran = Math.floor(Math.random() * colors.length);
        $(".borColor").css("background-color", colors[ran]);
    });
    $('.img-responsive').hover(function () {
        $(this).addClass('transition');
    }, function () {
        $(this).removeClass('transition');
    });
</script>
{{--Login form--}}

<style>
    .modal-dialog {
        min-width: 250px;
        padding: 14px 14px 0;
        overflow: hidden;
        background-color: rgba(255, 255, 255, .8);
    }

</style>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-body">
            <form method="post" action="#" role="login">
                <div align="center">
                    <h1 style="color: #1b6d85;font-weight: bold;">เข้าสู่ระบบ</h1>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Username" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password" required/>
                    </div>
                    <button type="submit" name="go" class="btn  btn-primary ">เข้าสู่ระบบ</button>
                    <div>
                        <a href="#">Create account</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
{{--end--}}
</div>
