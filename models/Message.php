<?php
    class Message {
        private $url;

        public function __construct($url) {
            $this->url = $url;
        }

        public function setMessage($msg, $type, $redirect = "index.php") {
            $_SESSION["msg"] = $msg;
            $_SESSION["type"] = $type;

            if ($redirect != "back") {
                header("Location: " . $this->url . $redirect);
            } else {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }

        public function getMessage() {
            // Exemplo de implementação:
            if (!empty($_SESSION["msg"])) {
                $message = $_SESSION["msg"];
                $type = $_SESSION["type"];

                $this->clearMessage(); // limpar após exibir

                return "<div class='msg $type'>$message</div>";
            }

            return "";
        }

        public function clearMessage() {
            $_SESSION["msg"] = "";
            $_SESSION["type"] = "";
        }
    }
    
?>
