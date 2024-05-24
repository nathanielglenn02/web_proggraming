<?php
function resize_image($file_original, $w, $h, $crop = FALSE)
{
    list($width_original, $height_original) = getimagesize($file_original);
    $r = $width_original / $height_original;
    if ($crop) {
        if ($width_original > $height_original) {
            $width_original = ceil($width_original - ($width_original * abs($r - $w / $h)));
        } else {
            $height_original = ceil($height_original - ($height_original * abs($r - $w / $h)));
        }
        $newwidth = $w;
        $newheight = $h;
    } else {
        if ($w / $h > $r) {
            $newwidth = $h * $r;
            $newheight = $h;
        } else {
            $newheight = $w / $r;
            $newwidth = $w;
        }
    }
    $src = imagecreatefromjpeg($file_original);
    $destination = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($destination, $src, 0, 0, 0, 0, $newwidth, $newheight, $width_original, $height_original);
    return $destination;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 9 Proses</title>
</head>

<body>
    <?php
    $messages = [];

    foreach ($_POST['nama'] as $key => $nama) {
        if ($_FILES['photo']['name'][$key]) {
            // Check for upload errors
            if (!$_FILES['photo']['error'][$key]) {
                $file_info = getimagesize($_FILES['photo']['tmp_name'][$key]);
                if (empty($file_info)) {
                    $messages[] = "The uploaded file doesn't seem to be an image.";
                } else {
                    // Check file MIME type
                    if ($file_info['mime'] == 'image/jpeg' || $file_info['mime'] == 'image/png') {
                        // Check file size (less than 500KB)
                        if ($_FILES['photo']['size'][$key] < 1512000) {
                            $ext = pathinfo($_FILES['photo']['name'][$key], PATHINFO_EXTENSION);

                            $img_baru = resize_image($_FILES['photo']['tmp_name'][$key], 200, 200);
                            imagejpeg($img_baru, 'image/' . $nama . '_thumbnail.' . $ext);

                            if (move_uploaded_file($_FILES['photo']['tmp_name'][$key], 'image/' . $nama . '.' . $ext)) {
                                $messages[] = "Congratulations! Your file '{$nama}.{$ext}' was accepted.";
                            } else {
                                $messages[] = "Failed to move uploaded file '{$nama}.{$ext}'.";
                            }
                        } else {
                            $messages[] = "Your file '{$nama}.{$ext}' exceeds the maximum size of 500KB.";
                        }
                    } else {
                        $messages[] = "Your file '{$nama}.{$ext}' is not a valid JPG/PNG image.";
                    }
                }
            } else {
                $messages[] = "Oops! Your upload triggered the following error: " . $_FILES['photo']['error'][$key];
            }
        } else {
            $messages[] = "You did not select any file for '{$nama}'.";
        }
    }

    foreach ($messages as $message) {
        echo $message . "<br>";
    }
    ?>
</body>

</html>