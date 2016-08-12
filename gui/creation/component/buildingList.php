<?php

// Show error message if need
if (isset($_SESSION['feedback'])) {
    $feedback = $_SESSION['feedback'];
    $feedbackObj = unserialize($feedback);
    showFeedback($feedbackObj);
}

// Write building table
getBuildingList();