<select name="subcatename" class="form-control" id="subcatename">
    <option>Select One</option>
    <?php
    foreach ($allsubcate as $singleSubcateid):
        ?>
        <option value="<?php echo $singleSubcateid->subcate_id; ?>">
            <?php echo $singleSubcateid->subCategory_name; ?>
        </option>
        <?php
    endforeach;
    ?>
</select>