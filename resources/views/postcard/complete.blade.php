<?php
//dd($data);
?>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
</head>

<body>
@if ($data === 1)
    <h2>Decrypt Complete</h2>
@else
    <h2>Errors found</h2>
    {{ $data }}
@endif
</body>

</html>