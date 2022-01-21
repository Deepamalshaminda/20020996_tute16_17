<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload</title>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>

<body>
    <?php foreach ($errors as $error) : ?>
        <li><?= esc($error) ?></li>
    <?php endforeach ?>

    <?= form_open_multipart('upload/upload') ?>

    <fieldset>
        <legend>Upload your favorite images</legend>

    <label>Title of the image : </label>
    <input type="text" name="title" placeholder="Enter title" /><br>

    <label>Image : </label>
    <input type="file" name="userfile" size="20" />

    <br /><br />

    <input type="submit" value="Upload" />
    <p class="btn"><?= anchor('viewimages', 'View Uploaded Images') ?></p><br>

    </fieldset>

    </form>

</body>

</html>