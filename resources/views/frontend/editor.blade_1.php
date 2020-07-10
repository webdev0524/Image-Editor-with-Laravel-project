<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>idealtool</title>
    <link type="text/css" href="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.css" rel="stylesheet">
    <!-- <link type="text/css" href="../dist/tui-image-editor.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tui-image-editor@3.2.2/dist/tui-image-editor.css">
    <style>
        @import url(http://fonts.googleapis.com/css?family=Noto+Sans);

        html,
        body {
            height: 100%;
            margin: 0;
        }
    </style>
</head>

<body>

    <div id="tui-image-editor-container"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.0/fabric.js"></script>
    <script type="text/javascript"
        src="https://uicdn.toast.com/tui.code-snippet/v1.5.0/tui-code-snippet.min.js"></script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/tui-image-editor@3.9.0/dist/tui-image-editor.min.js"></script>
    <script src="../js/theme/white-theme.js"></script>
    <script src="../js/theme/black-theme.js"></script>
    <script>
        // Image editor
        var imageEditor = new tui.ImageEditor('#tui-image-editor-container', {
            includeUI: {
                loadImage: {
                    path: 'img/sampleImage2.png',
                    name: 'SampleImage'
                },
                theme: whiteTheme, // or whiteTheme
                initMenu: 'filter',
                menuBarPosition: 'bottom'
            },
            cssMaxWidth: 700,
            cssMaxHeight: 500,
            usageStatistics: false
        });
        window.onresize = function () {
            imageEditor.ui.resizeEditor();
        }
    </script>
</body>

</html>