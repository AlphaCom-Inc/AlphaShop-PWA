<div class="card">
    <div class="card-header p-0">
        <ul class="nav nav-pills p-2">
            <?php $i = 1; foreach($this->groups as $group_id => $group_item): ?>
                <li class="nav-item"><a href="#tab_<?= $group_id ?>" class="nav-link <?php if($i == 1) echo 'active';?>" data-toggle="tab"><?= $group_item ?></a></li>
                <?php $i++; endforeach; ?>
            <li class="ml-auto">
                <a href="#" id="reset-filter" class="nav-link">Сброс</a>
            </li>
        </ul>
    </div>
    <div class="card-body" id="filter">
        <div class="tab-content">
            <?php if(!empty($this->attrs[$group_id])): ?>
                <?php $i = 1; foreach($this->groups as $group_id => $group_item): ?>
                    <div class="tab-pane<?php if($i == 1) echo ' active' ?>" id="tab_<?= $group_id ?>">
                        <?php foreach($this->attrs[$group_id] as $attr_id => $value): ?>
                            <?php
                            if(!empty($this->filter) && in_array($attr_id, $this->filter)){
                                $checked = 'checked';
                            }else{
                                $checked = null;
                            }
                            ?>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="<?= $attr_id ?>" value="<?= $attr_id ?>" name="attrs[<?= $group_id ?>]" <?= $checked ?>>
                                    <label for="<?= $attr_id ?>" class="custom-control-label"><?= $value ?></label>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>