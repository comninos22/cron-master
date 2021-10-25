<?php


class View
{
    private $data = array();

    private $render = FALSE;

    public function __construct($template, $withMainView, $prefix = false)
    {
        try {
            $template = str_replace("/", "\\", $template);
            $file = ROOT . '/views/' . ($prefix ? $prefix . "/" : "") .  strtolower($template) . '.php';
            if (file_exists($file)) {
                if ($withMainView) {
                    $this->data["subView"] = $file;
                    $this->render = ROOT . '/views/MainView.php';
                } else {
                    $this->render = $file;
                }
            } else {
                throw new Exception('View ' . $template . ' not found!');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function assign($variable, $value)
    {
        $this->data[$variable] = $value;
    }

    public function __destruct()
    {
        extract($this->data);
        include($this->render);
    }
}
