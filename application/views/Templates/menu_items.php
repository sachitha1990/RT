<li class="header">HEADER</li>
<?php foreach ($menu_items as $key => $value): ?>
  <?php if (isset($value['childs'])): ?>
    <li class="treeview"><a href="<?=site_url($value['menu_url'])?>"><span> <?=$value['menu_name']?> </span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span></a>
      <ul class="treeview-menu">
        <?php foreach ($value['childs'] as $key => $child): ?>
          <li><a href="<?=site_url($child['menu_url'])?>"><?=$child['menu_name']?></a></li>
        <?php endforeach ?>
      </ul>
    </li>
  <?php else:?>
    <li><a href="<?=site_url($value['menu_url'])?>"><i class="fa fa-link"></i><span><?=$value['menu_name']?></span></a></li>
  <?php endif ?>
<?php endforeach ?>