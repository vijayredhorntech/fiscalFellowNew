<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New DSC Enquiry </div>

                <div class="card-body">
                    <p><strong>Name:</strong> {{ $data['name'] }}</p>
                    <p><strong>Type</strong> {{ $data['dcsType'] }}</p>
                    <p><strong>Phone:</strong> {{ $data['number'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
