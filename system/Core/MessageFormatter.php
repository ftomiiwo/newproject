<?php
    /**
     *
     */
    class MessageFormatter
    {
        private static $locale;
        var $message;
        var $params;
        var $locale;
        function __construct($loc, $msg, $par)
        {
            # code...
            $this->message = $msg;
            $this->locale = $loc;
            $this->params = $par;

        }

        function set_params($par)
        {
            $this->params = $par;
        }

        function get_params()
        {
            return $this->params;
        }

        function set_message($msg)
        {
            $this->message = $msg;
        }

        function get_message()
        {
            return $this->message;
        }

        var $pack() = [$message, $params];
        function formatMessage()
        {
            return $this->pack;
        }
    }

 ?>
