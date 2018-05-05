<?php


require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);

include("../header.php");
?>
<div class="row main-row">
    <div class="9u">
        <section class="left-content">
            <h2><?php echo stripslashes($pageDetails["page_title"]); ?></h2>
            <?php echo stripslashes($pageDetails["page_desc"]); ?>
        </section>
    
    </div>
    <!--sidebar starts-->
	<?php include("sidebar.php"); ?>    
    <!--sidebar ends-->
</div>
<?php
include("../footer.php");
?>
