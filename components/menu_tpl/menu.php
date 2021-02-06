<li <? if(isset($category['children'])) echo 'class = "dropdown"' ?>>
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']]) ?>>">
        <?= $category['title']?>
    </a>
</li>