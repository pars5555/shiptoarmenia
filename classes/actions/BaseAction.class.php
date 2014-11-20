<?php

require_once (CLASSES_PATH . "/framework/AbstractAction.class.php");
require_once (CLASSES_PATH . "/exceptions/NgsException.class.php");

/**
 * @author Vahagn Sookiasian
 */
abstract class BaseAction extends AbstractAction {

    public function getUser() {
        return $this->sessionManager->getUser();
    }

    protected function getJsonInput() {
        $entityBody = file_get_contents('php://input');
        return json_decode($entityBody, true);
    }

    public function onNoAccess() {
        $this->redirect('/login');
    }

}

?>