
<style>
    h4{
        cursor: pointer;
        background: #888;
        border-radius:5px;
        text-align: center;
        color:#fff;
        margin-top:12px;
    }
    h4:first-child {
        margin-top: 0;
    }

    h4:hover{
        color:#aff;
    }

    .tab-hide {
        display: none;
    }

    p{
        padding-left:15px;
        margin-bottom: 6px;
    }
</style>
<script src='/php_commerce/admin/public/js/jquery.js'></script>

<div>
    <h4>用户管理</h4>
    <div class="tab-hide" data-include="admin/user">
        <p><a href='/php_commerce/admin/user/index.php'>|-查看用户</a></p>
        <p><a href='/php_commerce/admin/user/add.php'>|-添加用户</a></p>
    </div>

    <h4>分类管理</h4>
    <div class="tab-hide" data-include="admin/class">
        <p><a href='/php_commerce/admin/class/index.php'>|-查看分类</a></p>
        <p><a href='/php_commerce/admin/class/add.php'>|-添加分类</a></p>
    </div>
    <h4>品牌管理</h4>
    <div class="tab-hide" data-include="admin/brand">
        <p><a href='/php_commerce/admin/brand/index.php'>|-查看品牌</a></p>
        <p><a href='/php_commerce/admin/brand/add.php'>|-添加品牌</a></p>
    </div>
    <h4>商品管理</h4>
    <div class="tab-hide" data-include="admin/shop">
        <p><a href='/php_commerce/admin/shop/index.php'>|-查看商品</a></p>
        <p><a href='/php_commerce/admin/shop/add.php'>|-添加商品</a></p>
    </div>
    <h4>评论管理</h4>
    <div class="tab-hide" data-include="admin/comment">
        <p><a href='/php_commerce/admin/comment/index.php'>|-查看评论</a></p>
    </div>
    <h4>订单状态</h4>
    <div class="tab-hide" data-include="admin/status">
        <p><a href='/php_commerce/admin/status/index.php'>|-查看状态</a></p>
        <p><a href='/php_commerce/admin/status/add.php'>|-添加状态</a></p>
    </div>
    <h4>订单管理</h4>
    <div class="tab-hide" data-include="admin/indent">
        <p><a href='/php_commerce/admin/indent/index.php'>|-查看订单</a></p>
    </div>

    <h4>广告管理</h4>
    <div class="tab-hide" data-include="admin/advert">
        <p><a href='/php_commerce/admin/advert/index.php'>|-查看广告</a></p>
        <p><a href='/php_commerce/admin/advert/index.php'>|-添加广告</a></p>
    </div>

    <h4>系统管理</h4>
    <div class="tab-hide" data-include="logout">
        <p><a href="/php_commerce/admin/adminpass.php">|-修改口令</a></p>
        <p><a href="/php_commerce/admin/logout.php">|-退出系统</a></p>
        <p><a href="/php_commerce/admin/index.php">|-网站首页</a></p>
    </div>
</div>
<script>
    $('h4').click(function(){
        $(this).next().toggle();
        $('div[class="tab-hide"]').not($(this).next()).hide();
    });

    const tabHides = document.getElementsByClassName('tab-hide')
    const pathname = location.pathname
    for (let i = 0; i < tabHides.length; i++) {
        const item = tabHides[i]
        const name = item.getAttribute('data-include')
        if(pathname.includes(name)){
            $(`div[data-include="${name}"]`).toggle()
        }
    }
</script>