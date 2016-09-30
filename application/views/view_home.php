<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
<div id="container">
    <h2><?php echo $page_header; ?></h2>
    <div id="main">
        <?php
        echo '<h3>element</h3>';
        //create variable - associative array
        $assoc_array = array('name' => 'CodeIgniter', 'Size' => '3.9mb');

        //returns "CodeIgniter"
        echo element('name', $assoc_array). '<br/>';

        //returns NULL
        echo element('name', $assoc_array). 'echoing NULL echoes empty string...<br/>';

        //specify what it returns upon not finding it
        echo element('url', $assoc_array, 'not there'); //setting 'not there' as default value

        ?>

    </div>

</div>

</body>
