<ul id="menu">
        <li id="dashboard"><a href="<?php echo $dashboard; ?>"><i class="fa fa-dashboard fa-fw"></i><span>Dashboard</span></a></li>

        <?php if (!empty($list_menu_master_purchasing)) { ?>

        <li id="master">
            <a class="parent"><i class="fa fa-tags fa-fw"></i><span>Master</span></a>
            <ul>
                <?php if (!empty($list_menu_master_purchasing)) { ?>
                <li>
                    <a class="parent"><span>Master Purchasing</span></a>
                    <ul>
                        <?php foreach ($list_menu_master_purchasing as $menu) { ?>
                        <li><a href="<?php echo $menu['link']; ?>"><span><?php echo $menu['text']; ?></span></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </li>

        <?php } ?>

        <?php if (!empty($list_menu_setting)) { ?>

        <li id="setting">
            <a class="parent"><i class="fa fa-cog fa-fw"></i><span>Setting</span></a>
            <ul>
            <?php foreach($list_menu_setting as $menu) { ?>
            <li><a href="<?php echo $menu['link']; ?>"><span><?php echo $menu['text'] ?></span></a></li>
            <?php } ?>
            </ul>
        </li>

        <?php } ?>
</ul>