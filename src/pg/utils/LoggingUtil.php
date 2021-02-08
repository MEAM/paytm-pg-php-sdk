<?php

    /**
     * Copyright (C) 2019 Paytm.
     */

    namespace paytmpg\pg\utils;

    use Exception;
    use paytmpg\pg\constants\Config;

    /**
     * Class LoggingUtil
     * @package Paytm\pg\utils
     */
    class LoggingUtil
    {

        /**
         * @var Logger
         */
        protected static $logger = null;

        /**
         * LoggingUtil constructor.
         */
        protected function __construct()
        {
        }

        /**
         * @param string $severity
         * @param string $className
         * @param string $msg
         * @throws Exception
         */
        public static function addLog($severity, $className, $msg)
        {
        }
    }