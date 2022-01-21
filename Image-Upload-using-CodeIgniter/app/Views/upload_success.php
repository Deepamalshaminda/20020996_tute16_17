<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload Form</title>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>

<body>

<form action="#">
    <fieldset>
        <legend>View details</legend>
    

    <h3>Image was successfully uploaded to the database.</h3>

    <ul>
        <li>name: <?= esc($uploaded_flleinfo->getBasename()) ?></li>
        <li>size: <?= esc($uploaded_flleinfo->getSizeByUnit('kb')) ?> KB</li>
    </ul>

    <p class="uvbtn"><?= anchor('upload', 'Upload Another File!') ?></p>
    <p class="uvbtn"><?= anchor('viewimages', 'View Uploaded Images') ?></p>
    </fieldset>
</form>

    

</body>

</html>