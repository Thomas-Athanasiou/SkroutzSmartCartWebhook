<?php
    /**
     * @author Thomas Athanasiou at Hippiemonkeys | @Thomas-Athanasiou
     * @copyright Copyright (c) 2022 Hippiemonkeys Web Inteligence EE (https://hippiemonkeys.com)
     * @package Hippiemonkeys_SkroutzSmartCartWebhook
     */

    declare(strict_types=1);

    namespace Hippiemonkeys\SkroutzSmartCartWebhook\Model;

    use Hippiemonkeys\SkroutzSmartCart\Model\LineItemRejectionReason as AbstractModel,
        Hippiemonkeys\SkroutzSmartCartWebhook\Model\ResourceModel\LineItemRejectionReason as ResourceModel;

    class LineItemRejectionReason
    extends AbstractModel
    {
        /**
         * @inheritdoc
         */
        protected function _construct()
        {
            $this->_init(ResourceModel::class);
        }
    }
?>