<section class="categorySection">
    <div class="container">
        <div class="row">
            <div class="categoryarea">
                <button class="btn btn-primary"  data-toggle="modal" data-target="#vanuModal">
                    Category Create
                </button>
                <h4 class="text-center errors"><?php echo $this->session->flashdata('errors'); ?></h4>
                <h4 class="text-center success"><?php echo $this->session->flashdata('success'); ?></h4>
                <!--modal--> 
                <div class="modal fade" id="vanuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Category</h4> 
                            </div>
                            <div class="modal-body">
                                <?php echo form_open('CbeController/categoryCreate', array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="name" class="col-md-offset-1 col-md-3 cateName">Category Name<span class="red"> * </span></label>                                
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Write Category Name!">
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

                    <div class="text-center ctTitle">Category List</div>
                    <table class="table table-hover">
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
                            <th>Action</th>
                        </tr>
                        <?php
                        $sl = 0;
                        foreach ($allCategory as $singleCate):
                            $sl++;
                            ?>
                            <tr>
                                <td><?php echo $sl; ?></td>
                                <td><?php echo $singleCate->category_name; ?></td>
                                <td>
                                    <?php echo anchor('CbeController/categoryEdit/' . $singleCate->category_id, ' ', array('class' => 'glyphicon glyphicon-edit btn btn-primary sameEdit')); ?> 
                                    <?php echo anchor('CbeController/categoryDelete/' . $singleCate->category_id, ' ', array('class' => 'glyphicon glyphicon-trash btn btn-danger sameDelete', 'onclick' => "return confirm('Do you want to delete it ?');")); ?>
                                </td>
                            </tr>
                            <?php
                        endforeach;
                        ?>
                    </table>
                    <?php echo $pagination; ?>
                </div>
            </div>
        </div>
    </div>
</section>