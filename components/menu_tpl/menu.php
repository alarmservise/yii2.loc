<li <? if(isset($category['children'])) echo 'class = "dropdown"' ?>>
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']]) ?>>" <? if(isset($category['children'])) echo 'class = "dropdown-toggle" data-toggle="dropdown"' ?>>
        <?= $category['title']?>
    </a>
    <? if(isset($category['children'])): ?>
        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
            <div class="w3ls_vegetables">
                <ul>
                    <li><a href="drinks.html">Soft Drinks Test</a></li>
                    <li><a href="drinks.html">Juices</a></li>
                </ul>
            </div>
        </div>
    <? endif; ?>
</li>