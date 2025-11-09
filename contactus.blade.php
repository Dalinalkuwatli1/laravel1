<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Us Message</title>
</head>
<body>
    <h2>You have received a new message from the contact us form</h2>
    <p><strong>Name:</strong> {{ $contactus->name }}</p>
    <p><strong>Email:</strong> {{ $contactus->email }}</p>
    <p><strong>Phone:</strong> {{ $contactus->phone }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contactus->message }}</p>
</body>
</html>
