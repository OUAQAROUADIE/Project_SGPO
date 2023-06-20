<!DOCTYPE html>
<html>
<head>
    <title>Error Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .error-container {
            margin-top: 100px;
            text-align: center;
        }
        .error-code {
            font-size: 100px;
            font-weight: bold;
            color: #dc3545;
        }
        .error-message {
            font-size: 24px;
            color: #000;
            margin-top: 20px;
        }
        .btn-home {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="error-container">
                    <div class="error-code">404</div>
                    <div class="error-message">
                        Oops! The page you're looking for doesn't exist.
                    </div>
                    <a href="function.php" class="btn btn-primary btn-home">Go to Home Page</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
