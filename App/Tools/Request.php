<?php

namespace App\Tools;

class Request {
    const BASE_URL = "http://10.45.18.223:3000/api/v1/";
    protected $url;
    protected $params;
    protected $method;

    static public function perform($url, $params = [], $method = "GET")
    {
        $request = new Request($url, $params, $method);
        return $request->send();
    }


    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $url = trim($url, "/");
        $this->url = self::BASE_URL . $url;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    function __construct($url, $params = [], $method = "GET")
    {
        $this->setUrl($url);
        $this->setParams($params);
        $this->method = $method;
    }

    /**
     * send
     */
    public function send()
    {
        $ch = curl_init();
        if ($ch){
           curl_setopt_array($ch, [
               CURLOPT_URL => $this->getUrl(),
               CURLOPT_HEADER => false,
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_FOLLOWLOCATION => 1,
            ]);
            if (in_array($this->getMethod(), ["PUT", "POST", "DELETE"])){
                if (!empty($this->getParams())){
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($this->getParams()));
                }
                if ($this->getMethod() === "POST") {
                    curl_setopt($ch, CURLOPT_POST, 1);
                } else {
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $this->getMethod());
                }
            }
            $ret = curl_exec($ch);
            curl_close($ch);
        }

        return json_decode($ret);
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return strtoupper($this->method);
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }


}