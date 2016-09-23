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
            <li><a href="#">About</a></li>
            <li id="userPage">
                <a href="#"><i class="icon-user"></i> My Page</a>
            </li>
            <li><a href="#" data-prevent="">Login</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" title="Start a new search">Clear</a></li>
            <br>
        </ul>
    </div><!--/.nav-collapse -->
</div>
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

