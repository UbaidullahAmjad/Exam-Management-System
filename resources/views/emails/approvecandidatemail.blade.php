<!DOCTYPE html>
<html>
<head>
    <title>Falcowork.com</title>
</head>
<body>
    <?php  ?>
    <h3>Dear {{ $candidate_name }}</h3>
    <h4>Your Approval ID is {{ $auth_id }}</h4>
    <p> Your documents are verified by {{ auth()->user()->name }}. <br>You can take exam of  <b>{{ $paper }}</b> by completing your registration and making payment</p>

    <p>Thank you</p>
</body>
</html>
