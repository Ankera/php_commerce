
<style>
    h4{
        cursor: pointer;
        background: #888;
        border-radius:5px;
        text-align: center;
        color:#fff;
    }

    h4:hover{
        color:#aff;
    }

    .tab-item {
        margin-bottom: 16px;
    }

    .tab-list {
        display: none;
    }

    p{
        padding-left:15px;
        margin-bottom: 6px;
    }
</style>
<script src='public/js/jquery.js'></script>

<div>
    <div class="tab-item">
        <h4>用户管理:</h4>
        <div class="tab-list">
            <p><a href='user_index.html'>|-查看用户</a></p>
            <p><a href='user_add.html' target='right'>|-添加用户</a></p>
        </div>
    </div>
    <div class="tab-item">
        <h4>商品管理:</h4>
        <div class="tab-list">
            <p><a href='shop_index.html' target='right'>|-查看商品</a></p>
            <p><a href='shop_add.html' target='right'>|-添加商品</a></p>
        </div>
    </div>
    <div class="tab-item">
        <h4>商品管理:</h4>
        <div class="tab-list">
            <p><a href='shop_index.html' target='right'>|-查看商品</a></p>
            <p><a href='shop_add.html' target='right'>|-添加商品</a></p>
        </div>
    </div>
    <div class="tab-item">
        <h4>商品管理:</h4>
        <div class="tab-list">
            <p><a href='shop_index.html' target='right'>|-查看商品</a></p>
            <p><a href='shop_add.html' target='right'>|-添加商品</a></p>
        </div>
    </div>
    <div class="tab-item">
        <h4>商品管理:</h4>
        <div class="tab-list">
            <p><a href='shop_index.html' target='right'>|-查看商品</a></p>
            <p><a href='shop_add.html' target='right'>|-添加商品</a></p>
        </div>
    </div>
    <div class="tab-item">
        <h4>商品管理:</h4>
        <div class="tab-list">
            <p><a href='shop_index.html' target='right'>|-查看商品</a></p>
            <p><a href='shop_add.html' target='right'>|-添加商品</a></p>
        </div>
    </div>
    <div class="tab-item">
        <h4>商品管理:</h4>
        <div class="tab-list">
            <p><a href='shop_index.html' target='right'>|-查看商品</a></p>
            <p><a href='shop_add.html' target='right'>|-添加商品</a></p>
        </div>
    </div>
    <div class="tab-item">
        <h4>商品管理:</h4>
        <div class="tab-list">
            <p><a href='shop_index.html' target='right'>|-查看商品</a></p>
            <p><a href='shop_add.html' target='right'>|-添加商品</a></p>
        </div>
    </div>
    <div class="tab-item">
        <h4>商品管理:</h4>
        <div class="tab-list">
            <p><a href='shop_index.html' target='right'>|-查看商品</a></p>
            <p><a href='shop_add.html' target='right'>|-添加商品</a></p>
        </div>
    </div>
    <div class="tab-item">
        <h4>商品管理:</h4>
        <div class="tab-list">
            <p><a href='shop_index.html' target='right'>|-查看商品</a></p>
            <p><a href='shop_add.html' target='right'>|-添加商品</a></p>
        </div>
    </div>
</div>
<script>
    $('h4').click(function(){
        $(this).next().toggle(300);
    });
</script>