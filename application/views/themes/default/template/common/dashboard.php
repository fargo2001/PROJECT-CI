<?php echo $header; ?>

<div class="page-header">
    <div class="container-fluid">
        <h1>Dashboard</h1>

        <?php if (isset($breadcrumbs)) {
            echo '<ul class="breadcrumb">';
            foreach ($breadcrumbs as $breadcrumb) {
                echo '<li><a href="' . $breadcrumb['link'] . '">' . $breadcrumb['text'] . '</a></li>';
            }
            echo '</ul>';
        } ?>
    </div>
</div>

<div class="container-fluid">
    <input type="button" onclick="testAjax()" name="ajaxbutton" value="Test Ajax" />
</div>

<script type="text/javascript">
    function testAjax() {
        var r = confirm("Are you sure?");

        if (!r) return;

        $.ajax({
            url:'dashboard/testAjax/555',
            dataType:'text',
            success:function( data ) {
                console.log(data);
            }
        });

        alert("Wow Ajax");
    }
</script>
<?php echo $footer; ?>