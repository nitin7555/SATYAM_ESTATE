<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
</head>
<body>
    <h1>Post Requirement Mail</h1>
    <p><strong>Property Want:</strong> {{ $data['property_want'] }}</p>
    <p><strong>Property Type:</strong> {{ $data['property_type'] }}</p>
    <p><strong>City:</strong> {{ $data['city'] }}</p>
    <p><strong>Locality:</strong> {{ $data['locality'] }}</p>
    <p><strong>BHK:</strong> {{ $data['bhk'] }}</p>
    <p><strong>Covered Area:</strong>{{ $data['covered_area'][0] }} {{ $data['covered_area'][1] }}</p>
    <p><strong>Land Area:</strong>{{ $data['land_area'][0] }} {{ $data['land_area'][1] }}</p>
    <h2>Contact Details</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Mobile:</strong> {{ $data['mobile'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
</body>
</html>
