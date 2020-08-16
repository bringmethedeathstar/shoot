<?php
/**
 * Shoot plugin for Craft CMS 3.x
 *
 * Grab a screenshot of any website from a URL
 *
 * @link      https://davecod.es/
 * @copyright Copyright (c) 2020 DaveP
 */

namespace bringmethedeathstar\shoot\assetbundles\shootfieldfield;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    DaveP
 * @package   Shoot
 * @since     1.0.0
 */
class ShootFieldFieldAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@bringmethedeathstar/shoot/assetbundles/shootfieldfield/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/ShootField.js',
        ];

        $this->css = [
            'css/ShootField.css',
        ];

        parent::init();
    }
}
