<?php 
/**
 *
 * @copyright (C), 2013-, King.
 * @name IPlugin.php
 * @author King
 * @version stable 1.0
 * @Date 2017年3月12日下午2:05:36
 * @Class List
 * @Function List
 * @History King 2021年10月19日下午5:28:32 0 第一次建立该文件
 *          King 2021年10月19日下午5:28:32 1 修改
 *          King 2021年10月19日下午5:28:32 stable 1.0 审定
 */
namespace Tiny\MVC\View\Engine\Template;

use Tiny\MVC\View\Engine\Template;

/**
 * Template Engine 的插件接口类
 * 
 * @package Tiny.MVC.View.Engine.Template
 * @since  2021年10月19日下午5:28:32
 * @final  2021年10月19日下午5:28:32
 *
 */
interface TemplatePluginInterface
{    
    /**
     * 解析前发生
     *
     * @param string $template 解析前的模板字符串
     * @return false|string
     */
    public function onPreParse($template);
    
    /**
     * 调用插件事件解析闭合标签
     * 
     * @param string $tagName
     * @return string|false
     */
    public function onParseCloseTag($tagName);
    
    /**
     * 调用插件事件解析tag
     *
     * @param string $tagName  标签名
     * @param string $tagBody 标签主体内容
     * @param string $extra 附加信息
     * @return string|boolean 返回解析成功的字符串  false时没有找到解析成功的插件 或者解析失败
     */
    public function onParseTag($tagName, $tagBody, $extra = null);
    
    /**
     * 解析完成后发生
     *
     * @param string $template 解析后的模板字符串
     * @return false|string
     */
    public function onPostParse($template);
}
?>