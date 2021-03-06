<?php
    /**
     * @author Thomas Athanasiou at Hippiemonkeys | @Thomas-Athanasiou
     * @copyright Copyright (c) 2022 Hippiemonkeys Web Inteligence EE (https://hippiemonkeys.com)
     * @package Hippiemonkeys_SkroutzSmartCartWebhook
     */

    declare(strict_types=1);

    namespace Hippiemonkeys\SkroutzSmartCartWebhook\Model\ResourceModel;

    use Hippiemonkeys\SkroutzSmartCart\Model\ResourceModel\PickupWindow as AbstractDb;

    class PickupWindow
    extends AbstractDb
    {
        /**
         * @inheritdoc
         */
        protected function _construct()
        {
            parent::_construct();
            $this->_isPkAutoIncrement = false;
        }
    }
?>