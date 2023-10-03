
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
    <div class="tab-hide" data-include="admin">
        <p><a href='/php_commerce/admin/user/index.php'>|-查看用户</a></p>
        <p><a href='/php_commerce/admin/user/add.php'>|-添加用户</a></p>
    </div>

    <h4>分类管理</h4>
    <div class="tab-hide" data-include="class">
        <p><a href='class/index.php' target='right'>|-查看分类</a></p>
        <p><a href='class/add.php' target='right'>|-添加分类</a></p>
    </div>
    <h4>品牌管理:</h4>
    <div class="tab-hide" data-include="brand">
        <p><a href=' data-include="class">/index.php' target='right'>|-查看品牌</a></p>
        <p><a href='brand/add.php' target='right'>|-添加品牌</a></p>
    </div>
    <h4>商品管理</h4>
    <div class="tab-hide" data-include="shop">
        <p><a href='shop/index.php' target='right'>|-查看商品</a></p>
        <p><a href='shop/add.php' target='right'>|-添加商品</a></p>
    </div>
    <h4>评论管理</h4>
    <div class="tab-hide" data-include="comment">
        <p><a href='comment/index.php' target='right'>|-查看评论</a></p>
    </div>
    <h4>订单状态</h4>
    <div class="tab-hide" data-include="status">
        <p><a href='status/index.php' target='right'>|-查看状态</a></p>
        <p><a href='status/add.php' target='right'>|-添加状态</a></p>
    </div>
    <h4>订单管理</h4>
    <div class="tab-hide" data-include="indent">
        <p><a href='indent/index.php' target='right'>|-查看订单</a></p>
    </div>

    <h4>广告管理</h4>
    <div class="tab-hide" data-include="advert">
        <p><a href='advert/index.php' target='right'>|-查看广告</a></p>
        <p><a href='advert/index.php' target='right'>|-添加广告</a></p>
    </div>

    <h4>系统管理</h4>
    <div class="tab-hide" data-include="logout">
        <p><a href="logout.php" target='_top'>|-退出系统</a></p>
        <p><a href="../index.php" target='_blank'>|-网站首页</a></p>
    </div>
</div>
<script>
    $('h4').click(function(){
        console.log(111, $(this).next())
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