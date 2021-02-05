<?php


namespace app\components;


use app\models\Category;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public $tpl;
    public $ul_class;
    public $data;
    public $tree;
    public $menuHtml;

    public function init()
    {
        parent::init();
        if($this->ul_class === null) {
            $this->ul_class = 'menu';
        }
        if($this->tpl === null) {
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';

    }

    public function run()
    {
        $this->data = Category::find()->select('id,parent_id,title')->indexBy('id')->asArray()->all();
        debug($this->data);

        return $this->tpl;
    }
}














