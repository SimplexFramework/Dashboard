<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

        @@Html::class('navbar-brand')->image(FILES_DIR . 'ico.png'):
        <a class="navbar-brand" href="@@siteUrl():"> ZN Framework</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-flag"></i>  @$upperLang = strtoupper(getLang()): <b class="caret"></b></a>
            <ul class="dropdown-menu">
                @foreach( LANGUAGES as $lang ):
                    @if($lang !== $upperLang):
                    <li>
                        <a href="@@siteUrl('home/lang/' . strtolower($lang)):"><i class="fa fa-fw fa-user"></i> @$lang:</a>
                    </li>
                    @endif:
                @endforeach:
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            @foreach(MENUS as $menu => $attr):
            <li class="{{$attr['href'] === CURRENT_CFPATH ? 'active' : ''}}">
                <a href="@@siteUrl($attr['href']):"><i class="fa fa-fw fa-@$attr['icon']:"></i> {{LANG[$menu]}}</a>
            </li>
            @endforeach:
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
