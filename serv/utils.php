<?php
include_once __DIR__ . "/../dto/alertMessage.php";

/**
 * Show error panel with param message
 * @param $feedback
 */
function showError($feedback)
{
    showFeedback(new AlertMessage(AlertMessage::STYLE_ERROR, $feedback));
}

/**
 * Show info panel with param message
 * @param $erreur
 */
function showSuccess($feedback)
{
    showFeedback(new AlertMessage(AlertMessage::STYLE_SUCCESS, $feedback));
}

/**
 * Show panel with param message and param style
 * @param $feedback
 * @param $style
 */
function showFeedback(AlertMessage $alertMessage)
{
    if (isset($alertMessage) && $alertMessage->isComplete()) {
       echo '</br><div class="alert alert-' . $alertMessage->getStyle() . '" role="alert">' . $alertMessage->getMessage() . '</div>';
    }
}
