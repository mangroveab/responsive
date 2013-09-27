<?php
    
    try {
        if (!$_GET['url']) {
            throw new Exception('Parametern "url" måste existera');
        }

        $iframes = array(
            array(
                'title' => 'iPhone - Porträtt',
                'width' => 320,
                'height' => 480,
                'class' => 'iphone-portrait'
            ),
            array(
                'title' => 'iPhone - Landskap',
                'width' => 480,
                'height' => 320,
                'class' => 'iphone-landscape'
            ),
            array(
                'title' => 'iPad - Porträtt',
                'width' => 768,
                'height' => 1024,
                'class' => 'ipad-portrait'
            ),
            array(
                'title' => 'iPad - Landskap',
                'width' => 1024,
                'height' => 768,
                'class' => 'ipad-landscape'
            ),
            array(
                'title' => 'Macbook',
                'width' => 1200,
                'height' => 800,
                'class' => 'macbook'
            ),
            array(
                'title' => 'iMac',
                'width' => 1400,
                'height' => 800,
                'class' => 'imac'
            )
        );

    } catch (Exception $e) {
        echo '<h1>' . $e->getMessage() . '</h1>';
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Responsive Design Testing</title>
    <link rel="stylesheet" type="text/css" href="style.css">  
</head>
<body>
    <div class="wrapper">
        <?php foreach ($iframes as $iframe) : ?>
            <div class="col">
                <h2><?php echo $iframe['title']; ?> <small><?php echo '(' . $iframe['width'] . '&times;' . $iframe['height'] . ')'; ?></small></h2>
                <div class="frame frame-<?php echo $iframe['class']; ?>">
                    <iframe src="<?php echo $_GET['url']; ?>" sandbox="allow-same-origin allow-forms" seamless width="<?php echo $iframe['width']; ?>" height="<?php echo $iframe['height']; ?>"></iframe>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>