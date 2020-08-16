<?php
/**
 * Shoot plugin for Craft CMS 3.x
 *
 * Grab a screenshot of any website from a URL
 *
 * @link      https://davecod.es/
 * @copyright Copyright (c) 2020 DaveP
 */

namespace bringmethedeathstar\shoot\models;

use bringmethedeathstar\shoot\Shoot;

use Craft;
use craft\base\Model;

/**
 * @author    DaveP
 * @package   Shoot
 * @since     1.0.0
 */
class Settings extends Model {
  // Public Properties
  // =========================================================================

  /**
   * @var string
   */
  public $someAttribute = 'Some Default';

  // Public Methods
  // =========================================================================

  /**
   * @inheritdoc
   */
  public function rules() {
    return [
      ['someAttribute', 'string'],
      ['someAttribute', 'default', 'value' => 'Some Default'],
    ];
  }
}
