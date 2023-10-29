// JavaScript code for your EduMentor web application

// Function to handle course enrollment
function enrollCourse(courseId) {
    // You can add code here to enroll the student in the selected course
    // For example, you can make an AJAX request to the server to enroll the student
    alert('Enrolled in Course ' + courseId);
}

// Add event listeners when the document is ready
document.addEventListener('DOMContentLoaded', function() {
    // Get all the enroll buttons
    var enrollButtons = document.querySelectorAll('.enroll-button');

    // Attach a click event listener to each enroll button
    enrollButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var courseId = button.getAttribute('data-course-id');
            enrollCourse(courseId);
        });
    });
});
