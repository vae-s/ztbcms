<?php
/**
 * User: jayinton
 * Date: 2019-07-25
 * Time: 11:04
 */

namespace Elementui\Controller;


use Common\Controller\AdminBase;

class ElementDemoController extends AdminBase
{
    //常用表格
    function common_table()
    {
        $this->display();
    }

    //表单
    function common_form()
    {
        $this->display();
    }

    //ueditor+秀米
    function ueditor_xiumi()
    {
        $this->display();

    }

    // 图片预览
    function preview_images()
    {
        $this->display();
    }
}