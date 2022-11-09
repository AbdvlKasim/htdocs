<?php
// form submitted //
if(isset($_REQUEST['upload-send']))
{
    echo "<pre>";
    echo "This script: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
    echo "Filename: " . $_FILES['upload-file']['name'] . "<br>";
    echo "Tmp location/name: " . $_FILES['upload-file']['tmp_name'] . "<br>";
    echo "Mime type: " . $_FILES['upload-file']['type'] . "<br>";
    echo "File size: " . $_FILES['upload-file']['size'] . " bytes (" . round($_FILES['upload-file']['size'] / 1048576, 2) . " MB) <br><br>";
    echo "</pre>";
}

// Define array for messages //
$messages = array();
if(is_uploaded_file($_FILES['upload-file']['tmp_name']))
{
    //file info 
    $file_type = $_FILES['upload-file']['type'];
    $file_size = $_FILES['upload-file']['size'];

//config 

$acc_file_types = array("jpg" => "image/jpeg", 
                         "gif" => "imgage/gif", 
                         "png" => "image/png"
                        );

$max_file_size = 153000; // in bytes
$dir = $_SERVER['DOCUMENT_ROOT'] . "/Ekstra/Filer";

// No directory with that name 
if(!file_exists($dir))
{
    if(!mkdir($dir, 0777, true))
    {
        die ("cannot create directory..." . $dir);
    }
}

//finding suffix 
$suffix = array_search($file_type, $acc_file_types);

//if filename exists 
do {
    $filname = substr(md5(rand(1,10000) . date('YmdHis')),0,5) .'.' .$suffix;
}
while (file_exists($dir .$filename));

// Errors?
if(!in_array($file_type,$acc_file_types))
{
    $acc_types = implode(",", array_keys($acc_file_types));
    $messages{'error'}[] = "invalid file type: only <em>" . $acc_types . "</em> are accepted.";
}

if($file_size > $max_file_size)
{
    $messages ['error'][] = "the file size (" . round($file_size / 1048576, 2) . "MB) exceeds max file ";
}

// if everything is well 
if (empty($messages))
{
    // Moving uploaded file to its new home //
    $uploaded_file = move_uploaded_file($_FILES['uploaded-file']['tmp_name'], $dir . $filename);

    if(!$uploaded_file)
    $messages['error'][] = "The file could not be uploaded";
    else 
    messages{'success'}
}



else
{
    $messages['error'][] = "No file is selected.";
}

?>



<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>M9 - upload file</title>
</head>

<body>
<?php
    /* Output messages to user */
    if(isset($messages) && !empty($messages))
    {
        echo "<strong>Message" . (sizeof($messages, COUNT_RECURSIVE)-1 > 1 ? "s:<br>" : ":<br>") . "</strong>";
        foreach($messages as $msg_type => $type_messages)
        {
            if($msg_type == 'error')
                foreach($type_messages as $message) { echo '<span style="color:red";>- ' . $message . '</span><br>'; }
            elseif($msg_type == 'success')
                foreach($type_messages as $message) { echo '<span style="color:green";>- ' . $message . '</span><br>'; }
        }
    }
    else
    {
        echo "<strong>Please select file to upload</strong>";
    }
?>

    <form method="POST" action="" enctype="multipart/form-data">
        <p>
            <label for="upload-file">Select file</label>
            <input name="upload-file" type="file">
        </p>
        <p><button type="submit" name="upload-send">Upload file</button></p>
    </form>
</body>
</html>