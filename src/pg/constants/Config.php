<?php
    /**
     * Copyright (C) 2019 Paytm.
     */

    namespace paytmpg\pg\constants;

    /**
     * Class Config
     * @package Paytm\pg\constants
     */
    class Config
    {

        /**
         * This holds unique uuid v4
         *
         * @var string
         */
        static $requestId;

    }
    Config::$requestId = LibraryConstants::PHP_SDK_TEXT . LibraryConstants::PHP_SDK_VERSION;