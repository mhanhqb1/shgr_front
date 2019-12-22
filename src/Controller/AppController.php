<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Routing\Router;
use App\Lib\Log\AppLog;
use App\Lib\Api;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /** @var object $AppUI Session infomation of user logged. */
    public $AppUI = null;
    
    /** @var object $controller Controller name. */
    public $controller = null;

    /** @var object $action Action name. */
    public $action = null;
    
    public $current_url = '';
    public $BASE_URL = '';
    public $BASE_URL_FRONT = '';
    public $_settings = array();

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Cookie', [
            'expires' => Configure::read('Config.CookieExpires'),
            'httpOnly' => true
        ]);
        $this->loadComponent('Common');
    }
    
    /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        // Redirect https
        if (Configure::read('Config.HTTPS') === true) {
            // ロードバランサへHTTPSでアクセスされた場合
            if (isset($_SERVER['HTTP_X_FORWARDED_PORT']) && 443 == $_SERVER['HTTP_X_FORWARDED_PORT']) {
                // ベースURLをHTTPSに書き直す
                Router::fullbaseUrl('https://' . $_SERVER['HTTP_HOST']);
            }
            if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == "http") {
                return $this->redirect('https://' . env('SERVER_NAME') . $this->here);
            } elseif (!isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 80) {
                return $this->redirect('https://' . env('SERVER_NAME') . $this->here);
            }
        }
        parent::beforeFilter($event);
        
        $this->controller = strtolower($this->request->getParam('controller'));
        $this->action = strtolower($this->request->getParam('action'));
        $this->current_url = Router::url($this->here, true);
        $this->BASE_URL = Router::fullBaseUrl();
        $this->_settings = $this->getSettings();
        
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event) {
        parent::beforeRender($event);
        // Auth
        if (isset($this->Auth) && $this->isAuthorized()) {
            $this->set('AppUI', $this->Auth->user());
        }
        
        // Set common param
        $this->set('controller', $this->controller);
        $this->set('action', $this->action);
        $this->set('current_url', $this->current_url);
        $this->set('BASE_URL', $this->BASE_URL);
        $this->set('BASE_URL_FRONT', $this->BASE_URL_FRONT);
        $this->set('_url', $this->request->getPath());
        $this->set('referer', Controller::referer());
        
        $this->set('_settings', $this->_settings);

        // Set default layout
        $this->setLayout();
    }
    
    /**
     * Commont function check user is Authorized..
     * 
     * 
     * @param object $user Session user logged.
     * @return boolean  If true is authorize, and false is unauthorize.
     */
    public function isAuthorized($user = null) {
        if (!isset($this->Auth)) {
            return false;
        }
        if (empty($user)) {
            $user = $this->Auth->user();
        }
        if (!empty($user)) {
            $this->AppUI = $user;
            return true;
        }
        return false;
    }

    /**
     * Commont function to get params of actions in controller.
     * 
     * @param array $default List parameter name. Default is array().
     * @return array
     */
    public function getParams($default = array()) {
        $params = $this->request->getQuery();
        if (!empty($default)) {
            foreach ($default as $paramName => $paramValue) {
                if (!isset($params[$paramName])) {
                    $params[$paramName] = $paramValue;
                }
            }
        }
        return $params;
    }
    
    /**
     * Commont function set layout for view.
     */
    public function setLayout() {
        if ($this->controller == 'login' || $this->controller == 'infos') {
            $this->viewBuilder()->setLayout('empty');
        } else if ($this->controller == 'ajax') {
            $this->viewBuilder()->setLayout('ajax');
        } else {
            $this->viewBuilder()->setLayout('chotreo');
        }
    }
    
    // Get list cates
    public function getSettings() {
        $data = array();
        $data = Api::call(Configure::read('API.url_settings_all'), array());
        return $data;
    }
}