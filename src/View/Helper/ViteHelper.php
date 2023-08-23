<?php

declare(strict_types=1);

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use RuntimeException;

/**
 * Vite helper
 * 
 * @property \Cake\View\Helper\HtmlHelper $Html
 */
class ViteHelper extends Helper
{
    private const DEV_SERVER = 'http://127.0.0.1:5173';

    private static $isDevServeAlive = null;

    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    protected $_defaultConfig = [];

     /**
     * Other helpers used by FormHelper
     *
     * @var array
     */
    protected $helpers = ['Html'];


    private function loadAsset(string $name, array $options = [])
    {
        if(static::$isDevServeAlive) {
            $fullName = self::DEV_SERVER . '/'. $name;

           $this->renderAsset($fullName, $options);
        } else {

            $manifestFile = WWW_ROOT . 'build' . DS . 'manifest.json';
            if(!file_exists($manifestFile)) {
                throw new RuntimeException("The file manifest.json is mission, please run `npm run build` to compile assets");
            }
            

            $filecontent = file_get_contents($manifestFile);
            $manifest = json_decode($filecontent, true);

            $resource = $manifest[$name];
            $file = $resource['file'];

            $assetUrl = '/build/'. $file;

            $this->renderAsset($assetUrl, $options);
        }
    }

    private function renderAsset($name, array $options)
    {
        $isCss = str_ends_with($name, '.css');

        if($isCss) {
            echo $this->Html->css($name, $options);
        } else {
            echo $this->Html->script($name, $options);
        }
    }


    public function asset(string|array $name, array $options = [])
    {
        if(static::$isDevServeAlive === null) {
            static::$isDevServeAlive = $this->isViteAlive();
        }

        $options = $options + [
            'block' => true,
        ];

        if(is_array($name)) {
            foreach($name as $n) {
                $this->loadAsset($n, $options);
            }
        } else {
            $this->loadAsset($name, $options);
        }
    }

    private function isViteAlive()
    {
        $curlInit = curl_init(self::DEV_SERVER);
        curl_setopt($curlInit, CURLOPT_CONNECTTIMEOUT, 1);
        curl_setopt($curlInit, CURLOPT_NOBODY, true);

        $response = curl_exec($curlInit);

        curl_close($curlInit);

        if (!$response) {
            return false;
        }


        return true;
    }
}
