<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion Forum</title>
    <!-- Include Bootstrap CSS or link to a Bootstrap CDN -->
    <link rel="stylesheet" href="path_to_bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>Discussion Forum</h1>

        <!-- Send Message Form -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Send Message</h5>
                <form action="/discussion/send_message" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="attachment">Attachment:</label>
                        <input type="file" class="form-control-file" id="attachment" name="attachment">
                    </div>
                    <button type="submit" class="btn btn-primary" name="sendMessage">Send Message</button>
                </form>
            </div>
        </div>

        <!-- View Messages -->
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">View Messages</h5>
                <!-- Example: You can loop through discussion messages from your controller and display them here -->
                <div class="message">
                    <p><strong>Username:</strong> John Doe</p>
                    <p><strong>Message:</strong> This is a sample message.</p>
                    <!-- You can add more messages similarly -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>