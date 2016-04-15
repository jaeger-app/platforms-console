<?php
/**
 * Jaeger
 *
 * @author		Eric Lamb <eric@mithra62.com>
 * @copyright	Copyright (c) 2015-2016, mithra62, Eric Lamb
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Platforms/Console.php
 */
namespace JaegerApp\Platforms;

use JaegerApp\Platforms\AbstractPlatform;

/**
 * JaegerApp - Console Platform Object
 *
 * The bridge between mithra62 code and Console specific logic
 *
 * @package Platforms\Console
 * @author Eric Lamb <eric@mithra62.com>
 */
class Console extends AbstractPlatform
{

    /**
     * The set settings data from the configuration file
     * 
     * @var array
     */
    protected $config = array();

    /**
     * Sets the config data from an external source
     * 
     * @param array $data            
     * @return JaegerApp\Platform\Console
     */
    public function setConfig(array $data)
    {
        $this->config = $data;
        $this->config['db']['settings_table_name'] = $this->config['db']['prefix'] . 'backup_pro_settings';
        return $this;
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \JaegerApp\Platforms\AbstractPlatform::getDbCredentials()
     */
    public function getDbCredentials()
    {
        return $this->config['db'];
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \JaegerApp\Platforms\AbstractPlatform::getEmailConfig()
     */
    public function getEmailConfig()
    {
        return $this->config['email'];
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \JaegerApp\Platforms\AbstractPlatform::getCurrentUrl()
     */
    public function getCurrentUrl()
    {
        return $this->config['site_url'];
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \JaegerApp\Platforms\AbstractPlatform::getSiteName()
     */
    public function getSiteName()
    {
        return $this->config['site_name'];
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \JaegerApp\Platforms\AbstractPlatform::getTimezone()
     */
    public function getTimezone()
    {
        return date_default_timezone_get();
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \JaegerApp\Platforms\AbstractPlatform::getSiteUrl()
     */
    public function getSiteUrl()
    {
        return $this->config['site_url'];
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \JaegerApp\Platforms\AbstractPlatform::getEncryptionKey()
     */
    public function getEncryptionKey()
    {
        return $this->config['encryption_key'];
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \JaegerApp\Platforms\AbstractPlatform::getConfigOverrides()
     */
    public function getConfigOverrides()
    {
        return array();
    }

    /**
     * (non-PHPdoc)
     * @param string $url
     * @see \JaegerApp\Platforms\AbstractPlatform::redirect()
     */
    public function redirect($url)
    {}

    /**
     * (non-PHPdoc)
     * @param string $key
     * @param string $default
     * @see \JaegerApp\Platforms\AbstractPlatform::getPost()
     */
    public function getPost($key, $default = false)
    {}
}