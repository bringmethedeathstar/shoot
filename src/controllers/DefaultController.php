<?php
/**
 * Shoot plugin for Craft CMS 3.x
 *
 * Grab a screenshot of any website from a URL
 *
 * @link      https://davecod.es/
 * @copyright Copyright (c) 2020 DaveP
 */

namespace bringmethedeathstar\shoot\controllers;

use bringmethedeathstar\shoot\Shoot;

use Craft;
use craft\web\Controller;

/**
 * @author    DaveP
 * @package   Shoot
 * @since     1.0.0
 */
class DefaultController extends Controller {
  // Protected Properties
  // =========================================================================

  /**
   * @var    bool|array Allows anonymous access to this controller's actions.
   *         The actions must be in 'kebab-case'
   * @access protected
   */
  protected $allowAnonymous = ['index', 'do-something'];

  // Public Methods
  // =========================================================================

  /**
   * @return mixed
   */
  public function actionIndex() {
    $result = 'Welcome to the DefaultController actionIndex() method';

    return $result;
  }

  /**
   * @return mixed
   */
  public function actionDoSomething() {
    $result = 'Welcome to the DefaultController actionDoSomething() method';

    return $result;
  }
}
