<?php echo $header; ?>

<div class="page-header">
    <div class="container-fluid">
        <h1>Setting</h1>

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
  Test Setting
</div>

<?php echo $footer; ?>