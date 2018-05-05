<?php


require("../db.php");

$msg = '';
if (isset($_POST["sub"])) {


    $post_id = db_prepare_input($_POST["post_id"]);
    $post_title = db_prepare_input($_POST["post_title"]);
    $post_desc = db_prepare_input($_POST["post_desc"]);
    $meta_keywords = db_prepare_input($_POST["meta_keywords"]);
    $meta_desc = db_prepare_input($_POST["meta_desc"]);
    $sort_order = (int) db_prepare_input($_POST["sort_order"]);
    $parent = (int) db_prepare_input($_POST["parent"]);
    $status = db_prepare_input($_POST["status"]);
    $post_alias = db_prepare_input($_POST["post_alias"]);

    $status = ($status <> "") ? $status : "I";


    if ($post_title <> "" && $status <> "" && $parent <> "" && $post_alias <> "") {


        if ($post_id <> "") {

            $sql = "UPDATE " . TABLE_PAGES . " SET  `post_title` =  :pt, "
                    . " `post_desc` =  :pdsc, meta_keywords = :mkey, "
                    . " `meta_desc` =  :mdesc, `sort_order` =  :so,"
                    . " `parent` = :parent, `status` =  :status,"
                    . " `post_alias` =  :palias "
                    . " WHERE `post_id` = :pid";
            
            
            try {
                $stmt = $DB->prepare($sql);
                $stmt->bindValue(":pt", $post_title);
                $stmt->bindValue(":pdsc", $post_desc);
                $stmt->bindValue(":mkey", $meta_keywords);
                $stmt->bindValue(":mdesc", $meta_desc);
                $stmt->bindValue(":parent", $parent);
                $stmt->bindValue(":so", $sort_order);
                $stmt->bindValue(":status", $status);
                $stmt->bindValue(":palias", $post_alias);
                 $stmt->bindValue(":pid", $post_id);
               
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $msg = successMessage("Post update successfully");
                }  else if ($stmt->rowCount() == 0) {
                    $msg = successMessage("No changes affected");
                } else {
                    $msg = errorMessage("Failed to update post");
                }
            } catch (Exception $ex) {
                echo errorMessage($ex->getMessage());
            }
            
        } else {
            $sql = "INSERT INTO " . TABLE_PAGES . " (`post_title`, `post_desc`, `meta_keywords`, `meta_desc`, `parent`, `sort_order`, `status`, `post_alias`) VALUES 
				(:pt, :pdsc, :mkey, :mdesc, :parent, :so, :status, :palias)";

            try {
                $stmt = $DB->prepare($sql);
                $stmt->bindValue(":pt", $post_title);
                $stmt->bindValue(":pdsc", $post_desc);
                $stmt->bindValue(":mkey", $meta_keywords);
                $stmt->bindValue(":mdesc", $meta_desc);
                $stmt->bindValue(":parent", $parent);
                $stmt->bindValue(":so", $sort_order);
                $stmt->bindValue(":status", $status);
                $stmt->bindValue(":palias", $post_alias);
               
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $msg = successMessage("post added successfully");
                } else if ($stmt->rowCount() == 0) {
                    $msg = successMessage("No changes affected");
                } else {
                    $msg = errorMessage("Failed to add post");
                }
            } catch (Exception $ex) {
                echo errorMessage($ex->getMessage());
            }

          
        }
    } else {
        $msg = errorMessage("All fields are mandatory");
    }
}

if (isset($_GET["edit"]) && $_GET["edit"] != "") {
    $postTitle = "Edit post";

    try {
        $stmt = $DB->prepare("SELECT * FROM " . TABLE_PAGES . " WHERE `post_id` = :pid");
        $stmt->bindValue(":pid", intval(db_prepare_input($_GET["edit"])));
        $stmt->execute();
        $details = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo errorMessage($ex->getMessage());
    }
} else {
    $postTitle = "Add post";
}

include("../header.php");

$sql = "SELECT * FROM " . TABLE_PAGES . " WHERE status = 'A' AND parent = -1 ORDER BY post_title ASC";
try {
    $stmt = $DB->prepare($sql);
    $stmt->execute();
    $optionsRs = $stmt->fetchAll();
} catch (Exception $ex) {
    echo errorMessage($ex->getMessage());
}
?>   
<link rel="stylesheet" type="text/css" href="CLEditor/jquery.cleditor.css" />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="CLEditor/jquery.cleditor.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#post_desc").cleditor();
    });
    function changeAlias() {
        var title = $.trim($("#post_title").val());
        title = title.replace(/[^a-zA-Z0-9-]+/g, '-');
        $("#post_alias").val(title.toLowerCase());
    }
</script>
<?php echo $msg; ?>
<div class="formField">      
    <form method="post" action="" name="posts">
        <input type="hidden" name="post_id" value="<?php echo $details[0]["post_id"]; ?>"  />
        <table id="tableForm">
            <tr>
                <td class="formLeft"><span class="required">*</span>Title: </td>
                <td><input type="text" name="post_title" id="post_title" class="textboxes" value="<?php echo stripslashes($details[0]["post_title"]); ?>" autocomplete="off"  onkeyup="changeAlias();"  /> </td>
            </tr>
            <tr>
                <td class="formLeft"><span class="required">*</span>Parent: </td>
                <td>
                    <select name="parent">
                        <option value="-1">-Please Select-</option>
                        <?php
                        foreach ($optionsRs as $rs) {
                            ?>
                            <option value="<?php echo stripslashes($rs["post_id"]); ?>" <?php echo ($details[0]["parent"] == $rs["post_id"]) ? 'selected="selected"' : ''; ?>  >
                                <?php echo stripslashes($rs["post_title"]); ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="formLeft"><span class="required">*</span>post Alias: </td>
                <td><input type="text" name="post_alias" id="post_alias" class="textboxes" value="<?php echo stripslashes($details[0]["post_alias"]); ?>" /> (must be unique)</td>
            </tr>
            <tr>
                <td class="formLeft">Description: </td>
                <td>
                    <textarea name="post_desc" id="post_desc"><?php echo stripslashes($details[0]["post_desc"]); ?></textarea>
                </td>
            </tr>
            <tr>
                <td class="formLeft">Meta Keywords: </td>
                <td><input type="text" name="meta_keywords" class="textboxes" value="<?php echo stripslashes($details[0]["meta_keywords"]); ?>" /> </td>
            </tr>
            <tr>
                <td class="formLeft">Meta Description: </td>
                <td><input type="text" name="meta_desc" class="textboxes" value="<?php echo stripslashes($details[0]["meta_desc"]); ?>" /> </td>
            </tr>
            <tr>
                <td class="formLeft">Sort Order: </td>
                <td><input type="text" name="sort_order" class="textboxes" style="width:50px;" placeholder="0" value="<?php echo stripslashes($details[0]["sort_order"]); ?>" /> </td>
            </tr>
            <tr>
                <td class="formLeft"><span class="required">*</span>Status : </td>
                <td>     
                    <?php if (isset($_REQUEST["edit"]) && $_REQUEST["edit"] != "") { ?>
                        <label><input type="radio" name="status" value="A" <?php echo ($details[0]["status"] == 'A') ? 'checked' : ''; ?>  />Active</label> &nbsp; 
                        <label><input type="radio" name="status" value="I" <?php echo ($details[0]["status"] == 'I') ? 'checked' : ''; ?>  />Inactive</label>
                    <?php } else { ?>
                        <label><input type="radio" name="status" value="A" checked  />Active</label> &nbsp; <label><input type="radio" name="status" value="I"  />Inactive</label>
                    <?php } ?>



                </td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" name="sub" value="Save" /> &nbsp;  <input type="button" name="" onclick="javascript:window.location = 'manage_posts.php';" value="back to lists" /> </td>
            </tr>       
        </table>
    </form>
</div>

<?php
include("../footer.php");
?>