<?php
    /**
     * @author Thomas Athanasiou at Hippiemonkeys | @Thomas-Athanasiou
     * @copyright Copyright (c) 2022 Hippiemonkeys Web Inteligence EE (https://hippiemonkeys.com)
     * @package Hippiemonkeys_SkroutzSmartCartWebhook
     */

    declare(strict_types=1);

    namespace Hippiemonkeys\SkroutzSmartCartWebhook\Api\Data;

    use  Hippiemonkeys\SkroutzSmartCart\Api\Data\CustomerInterface as SkroutzSmartCartPickupLocationInterface;

    interface PickupLocationInterface
    extends SkroutzSmartCartPickupLocationInterface
    {
        /**
         * Gets Magento Id
         *
         * @return int
         */
        function getMagentoId(): int;

        /**
         * Sets Magento Id
         *
         * @param int $magentoId
         *
         * @return \this
         */
        function setMagentoId(int $magentoId);
    }

?>