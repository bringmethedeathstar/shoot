<?php
/**
 * Shoot plugin for Craft CMS 3.x
 *
 * Grab a screenshot of any website from a URL
 *
 * @link      https://davecod.es/
 * @copyright Copyright (c) 2020 DaveP
 */

namespace bringmethedeathstar\shoot\assetbundles\shoot;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    DaveP
 * @package   Shoot
 * @since     1.0.0
 */
class ShootAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@bringmethedeathstar/shoot/assetbundles/shoot/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/Shoot.js',
        ];

        $this->css = [
            'css/Shoot.css',
        ];

        parent::init();
    }
}
