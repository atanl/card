@extends('layouts.console')


@section('avatar')

    <li class="nav-header">
        <div class="dropdown profile-element">
            <span><img alt="image" class="img-circle" src="{{ asset('/img/profile_small.jpg') }}" /></span>
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">Beaut-zihan</strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
            </a>
            <ul class="dropdown-menu animated fadeInRight m-t-xs">

                <li>
                    <!-- 使用 router-link 组件来导航. -->
                    <!-- 通过传入 `to` 属性指定链接. -->
                    <!-- <router-link> 默认会被渲染成一个 `<a>` 标签 -->
                    <router-link class="J_menuItem" to="/foo">修改头像</router-link>
                </li>
                <li>
                    <router-link class="J_menuItem" to="/bar">个人资料</router-link>
                </li>
                <li>
                    <router-link class="J_menuItem" to="/contacts">联系我们</router-link>
                </li>
                <li>
                    <router-link class="J_menuItem" to="/mailbox">信箱</router-link>
                </li>
                <li class="divider"></li>
                <li>
                    <router-link href="login.html" to="/">安全退出</router-link>
                </li>
            </ul>
        </div>
        <div class="logo-element">H+
        </div>
    </li>

@endsection

@section('menus')

    <li>
        <a href="#">
            <i class="fa fa-home"></i>
            <span class="nav-label">主页</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="nav nav-second-level">
            <li>
                <router-link class="J_menuItem" to="index_v1.html" data-index="0">主页示例一</router-link>
            </li>
            <li>
                <router-link class="J_menuItem" to="index_v2.html">主页示例二</router-link>
            </li>
            <li>
                <router-link class="J_menuItem" to="index_v3.html">主页示例三</router-link>
            </li>
            <li>
                <router-link class="J_menuItem" to="index_v4.html">主页示例四</router-link>
            </li>
        </ul>
    </li>
    <li>
        <router-link class="J_menuItem" to="layouts.html">
            <i class="fa fa-columns"></i><span class="nav-label">布局</span>
        </router-link>
    </li>

@endsection


@section('components')

    <template id="homePage" class="container">
        <div>
            首页
        </div>

    </template>

    <script>
        const homePage = { template: '#homePage' };

    </script>


    @include('merchant.test')


    <template id="test1" class="container">
        <div>
            Home 11111111111111111
        </div>

    </template>

    <script>
        const roHome1 = { template: '#test1' };

    </script>
@endsection


@section('script')
    <script type="text/javascript">

        // 1. 定义（路由）组件。
        // 可以从其他文件 import 进来
        const Foo = { template: '<div>foo</div>' };
        const Bar = { template: '<div>bar</div>' };

        // 2. 定义路由
        // 每个路由应该映射一个组件。 其中"component" 可以是
        // 通过 Vue.extend() 创建的组件构造器，
        // 或者，只是一个组件配置对象。
        // 我们晚点再讨论嵌套路由。
        const routes = [
            { path: '/home', component: homePage },
            { path: '/foo', component: roHome },
            { path: '/bar', component: roHome1 }
        ];

        // 3. 创建 router 实例，然后传 `routes` 配置
        // 你还可以传别的配置参数, 不过先这么简单着吧。
        const router = new VueRouter({
            routes: routes // （缩写）相当于 routes: routes
        });

        // 4. 创建和挂载根实例。
        // 记得要通过 router 配置参数注入路由，
        // 从而让整个应用都有路由功能

        const app = new Vue({
            router: router
        }).$mount('#wrapper');

        // 现在，应用已经启动了！
    </script>

@endsection
