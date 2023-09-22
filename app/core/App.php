<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        // controller
        if (!empty($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        } elseif (empty($url[0])) {
            // Jika URL kosong, maka gunakan nilai default 'Home'
            $url[0] = 'Home';
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // method
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // parameter
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // jalankan controller & method serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); //mengambil nilai dari parameter "url" dan menghapus karakter "/" di bagian akhirnya, jika ada.
            $url = filter_var($url, FILTER_SANITIZE_URL); //membersihkan nilai URL dari karakter-karakter yang tidak valid.
            $url = explode('/', $url); //memecah URL menjadi sebuah array dengan menggunakan "/" sebagai pemisah.
            return $url;
        }
    }
}
