@extends('layouts.console')


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

    <div id="homePage" class="container">
        <div>
            首页
        </div>

    </div>

    <script>
        const homePage = { template: '#homePage' };

        var vmHomePage = new Vue({
            el: "#homePage"
        })
    </script>


    @include('merchant.test')


    <div id="test1" class="container">
        <div>
            Home 11111111111111111
        </div>

    </div>

    <script>
        const roHome1 = { template: '#test1' };

        var vmHome1 = new Vue({
            el: "#test1"
        })
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
