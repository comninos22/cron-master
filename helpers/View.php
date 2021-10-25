<?php


class View
{
    private $data = array();

    private $render = FALSE;
    private $template;
    public function __construct($template, $withMainView)
    {
        try {
            $file = ROOT . '/views/' . strtolower($template) . '.php';

            if (file_exists($file)) {
                if ($withMainView) {
                    var_dump($file);
                    $this->data["subView"] = $file;
                    $this->render = ROOT . '/views/MainView.php';
                } else {
                    $this->render = $template;
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
