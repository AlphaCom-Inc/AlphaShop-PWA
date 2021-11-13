<div class="kenne-sidebar_categories category-module">
    <div class="kenne-categories_title">
        <h5>Product Categories</h5>
    </div>
    <div class="sidebar-categories_menu">
        <ul>
        <?php foreach($this->groups as $group_id => $group_item): ?>
        <li class="has-sub">
            <a href="javascript:void(0)"><?=$group_item;?><?php if(isset($this->attrs[$group_id])): ?><i class="ion-ios-plus-empty"></i><?php endif; ?></a>
            <?php if(isset($this->attrs[$group_id])): ?>
            <ul>
                <?php foreach($this->attrs[$group_id] as $attr_id => $value): ?>
                    <?php
                    if(!empty($filter) && in_array($attr_id, $filter)){
                        $active = 'active';
                    }else{
                        $active = null;
                    }
                    ?>
                <li class="<?=$active;?>"><a href="javascript:void(0)" data-id="<?=$attr_id;?>"><?=$value;?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </li>


        <?php endforeach; ?>
        </ul>
    </div>
</div>

