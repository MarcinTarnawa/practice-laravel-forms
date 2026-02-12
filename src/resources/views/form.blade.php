<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container mt-5">
        <x-formField>
            <x-slot:action>/form</x-slot:action>
            <x-slot:name>name</x-slot:name>
            <x-slot:type>text</x-slot:type>
            <x-slot:placeholder>Twoje Imię</x-slot:placeholder>
            <x-slot:required>required</x-slot:required>
        </x-formField>
    </div>
</body>

</html>