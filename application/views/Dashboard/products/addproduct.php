<section class="categorySection">
    <div class="container">
        <div class="row">
            <div class="categoryarea">
                <button class="btn btn-primary"  data-toggle="modal" data-target="#vanuModal">
                    Product Create
                </button>
                <h4 class="text-center errors"><?php echo $this->session->flashdata('errors'); ?></h4>
                <h4 class="text-center success"><?php echo $this->session->flashdata('success'); ?></h4>
                <!--modal--> 
                <div class="modal fade" id="vanuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Products</h4> 
                            </div>
                            <div class="modal-body">
                                <?php echo form_open('', array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="catename" class="col-md-4 catename">Category Name <span class="red">*</span></label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="catename" id="catename">
                                            <option>Select One</option>
                                            <?php foreach ($allCategory as $singleCate):
                                                ?>
                                                <option value="<?php echo $singleCate->category_id; ?>">
                                                    <?php echo $singleCate->category_name; ?>
                                                </option>
                                                <?php
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $("#catename").change(function () {
//                                        alert("ok");
                                        var cateValue = $(this).val();
//                                        alert(cateValue);
                                        $.get("ajax_subcategory/" + cateValue, function (subCate) {
                                            $('#subcatename').html(subCate);
                                        });
                                    });
                                </script>
                                <div class="form-group">
                                    <label for="subcatename" class="col-md-4 subcatename">Sub-category Name</label>                                
                                    <div class="col-md-6">
                                        <select name="subcatename" class="form-control" id="subcatename">
                                            <option>Select One</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productsName" class="col-md-4 pdtname">Products Name <span class="red">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" id="productsName" name="productsName" class="form-control" placeholder="Write Products Name!">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productsdesc" class="col-md-4 pdtdesc">Description <span class="red">*</span></label>
                                    <div class="col-md-6">
                                        <textarea name="productsdesc" id="productsdesc" class="productsdesc form-control"></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group cmndiv">
                                    <label for="" class="col-md-offset-2 col-md-2 ttl"></label>
                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-primary submitbtn" name="save" value="Save">
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="well">

                    <div class="text-center ctTitle">Products List</div>
<!--                    <table class="table table-hover">
                    <?php form_open('', array('class' => 'navbar-form')); ?>
                        <div class="searchdiv navbar-right">
                            <div class="txtSearch">
                                <input type="text" class="form-control input-sm searchtxt" maxlength="64" placeholder="Search" />
                            </div>
                            <div class="btnSearch">
                                <button type="submit" class="btn  btn-sm"><span class="glyphicon glyphicon-search"></span></button>                                
                            </div>
                        </div>
                    <?php form_close(); ?>
                        <tr>
                            <th>SL No</td>
                            <th>Category Name</th>
                            <th>Sub-category Name</th>
                            <th>Action</th>
                        </tr>
                    <?php
                    $sl = 0;
                    foreach ($allSubCategory as $singleSubCate):
                        $sl++;
                        ?>
                                                            <tr>
                                                                <td><?php echo $sl; ?></td>
                                                                <td><?php echo $singleSubCate->category_name; ?></td>
                                                                <td><?php echo $singleSubCate->subCategory_name; ?></td>
                                                                <td>
                        <?php echo anchor('CbeController//' . $singleSubCate->subcate_id, ' ', array('class' => 'glyphicon glyphicon-edit btn btn-primary sameEdit')); ?> 
                        <?php echo anchor('CbeController//' . $singleSubCate->subcate_id, ' ', array('class' => 'glyphicon glyphicon-trash btn btn-danger sameDelete', 'onclick' => "return confirm('Do you want to delete it ?');")); ?>
                                                                </td>
                                                            </tr>
                        <?php
                    endforeach;
                    ?>
                    </table>-->
                    <?php // echo $pagination; ?>
                </div>
            </div>
        </div>
    </div>
</section>

