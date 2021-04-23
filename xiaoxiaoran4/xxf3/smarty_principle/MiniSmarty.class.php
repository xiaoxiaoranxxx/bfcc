<?php

class MiniSmarty
{
    public $template_dir = "./view/";  //模板目录
    public $templatec_dir = "./view_c/";  //编译文件目录

    public $tpl_var = array();
    function assign($k, $v)
    {
        $this->tpl_var[$k] = $v;
    }
    function display($tpl)
    {
        $n = $this->compile($tpl);
        require $n;
    }
    function compile($tpl)
    {
        $com_file = $this->templatec_dir . $tpl . ".php";
        $tpl_file = $this->template_dir . $tpl;
        if (file_exists($com_file) && filemtime($com_file) > filemtime($tpl_file)) {
            return $com_file;
        }
        echo 'the is new<hr/>';
        $cont = file_get_contents($tpl_file);

        $cont = str_replace("{\$", "<?php echo \$this->tpl_var['", $cont);
        $cont = str_replace("}", "']; ?>", $cont);

        file_put_contents($com_file, $cont);
        return $com_file;
    }
}
