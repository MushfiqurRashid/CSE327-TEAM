<?php

// Check if the form has been submitted
if (isset($_REQUEST['courseSubmitBtn'])) {
    // Check if any required fields are empty
    if (
        empty($_REQUEST['course_name']) ||
        empty($_REQUEST['course_desc']) ||
        empty($_REQUEST['course_teacher']) ||
        empty($_REQUEST['course_price'])
    ) {
        // Display a warning message if any of the required fields are empty
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        // All required fields are filled, you can proceed with further processing here
    }
}

?>