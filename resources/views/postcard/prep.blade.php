<?php
//dd($data['postcard']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
</head>

<body>
    @if (count($data['postcard']) < 1)
        <h2>No data to work with</h2>
    @else
        <h2>Data found</h2>
        <h4>Decrypt email addresses and place results in new email field</h4>
        <h3><a href="/decrypt">Decrypt</a></h3>
    @endif
</body>

</html>