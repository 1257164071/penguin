        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="{{ Auth::user()->get_user_icon() }}" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">{{ Auth::user()->user_name }}</strong></span>
                                <span class="text-muted text-xs block">{{ Auth::user()->account }}<b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="J_menuItem" href="form_avatar.html">修改头像</a>
                                </li>
                                <li><a class="J_menuItem" href="profile.html">个人资料</a>
                                </li>
                                <li><a class="J_menuItem" href="contacts.html">联系我们</a>
                                </li>
                                <li><a class="J_menuItem" href="mailbox.html">信箱</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="{{ route('logout') }}">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">H+
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">系统管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="{{ route('role') }}" data-index="0">角色管理</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="index_v2.html">用户管理</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="index_v3.html">主页示例三</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="index_v4.html">主页示例四</a>
                            </li>
                            <li>
                                <a href="index_v5.html" target="_blank">主页示例五</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="J_menuItem" href="layouts.html"><i class="fa fa-columns"></i> <span class="nav-label">布局</span></a>
                    </li>

                </ul>
            </div>
        </nav>
