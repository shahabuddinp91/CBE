<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active">
                    <?php echo anchor('CbeController/index', 'Dashboard', array('class' => '')); ?>
                </li>
            </ul>
            <div class="flip">Category Management <span class="glyphicon glyphicon-chevron-down"></span></div>
            <div class="ct">
                <ul class="nav nav-sidebar">
                    <li class="" >
                        <?php echo anchor('CbeController/category', 'Add Category', array('class' => 'sameli')); ?>
                    </li>
                    <li>
                        <?php echo anchor('CbeController/subCategory','Add Sub Category', array('class' => 'sameli'));?>
                    </li>
                </ul>
            </div>
            <div class="product">Product Management <span class="glyphicon glyphicon-chevron-down"></span></div>
            <div class="pdt">
                <ul class="nav nav-sidebar">
                    <li>
                        <?php echo anchor('CbeController/products','Add Product',array('class'=>'sameli'));?>
                    </li>
                </ul>
            </div>
        </div>