<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>idealtool</title>
    <link type="text/css" href="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{asset('public/css/service-basic.css')}}"> -->
    <link type="text/css" href="../css/service-basic.css" rel="stylesheet">
</head>

<body>
    <div class="body-container">
        <div class="tui-image-editor-controls">
            <div class="header">
                <!-- <img class="logo" src="img/TOAST UI Component.png"> -->
                <span class="name"> Image Editor</span>
                <ul class="menu">
                    <li class="menu-item border input-wrapper">
                        Load
                        <input type="file" accept="image/*" id="input-image-file">
                    </li>
                    <li class="menu-item border" id="btn-download">Download</li>
                </ul>
            </div>
            <ul class="menu">
                <li class="menu-item disabled" id="btn-undo">Undo</li>
                <li class="menu-item disabled" id="btn-redo">Redo</li>
                <li class="menu-item" id="btn-clear-objects">ClearObjects</li>
                <li class="menu-item" id="btn-remove-active-object">RemoveActiveObject</li>
                <li class="menu-item" id="btn-crop">Crop</li>
                <li class="menu-item" id="btn-flip">Flip</li>
                <li class="menu-item" id="btn-rotation">Rotation</li>
                <li class="menu-item" id="btn-draw-line">DrawLine</li>
                <li class="menu-item" id="btn-draw-shape">Shape</li>
                <li class="menu-item" id="btn-add-icon">Icon</li>
                <li class="menu-item" id="btn-text">Text</li>
                <li class="menu-item" id="btn-mask-filter">Mask</li>
                <li class="menu-item" id="btn-image-filter">Filter</li>
            </ul>
            <div class="sub-menu-container" id="crop-sub-menu">
                <ul class="menu">
                    <li class="menu-item" id="btn-apply-crop">Apply</li>
                    <li class="menu-item" id="btn-cancel-crop">Cancel</li>
                </ul>
            </div>
            <div class="sub-menu-container" id="flip-sub-menu">
                <ul class="menu">
                    <li class="menu-item" id="btn-flip-x">FlipX</li>
                    <li class="menu-item" id="btn-flip-y">FlipY</li>
                    <li class="menu-item" id="btn-reset-flip">Reset</li>
                    <li class="menu-item close">Close</li>
                </ul>
            </div>
            <div class="sub-menu-container" id="rotation-sub-menu">
                <ul class="menu">
                    <li class="menu-item" id="btn-rotate-clockwise">Clockwise(30)</li>
                    <li class="menu-item" id="btn-rotate-counter-clockwise">Counter-Clockwise(-30)</li>
                    <li class="menu-item no-pointer"><label>Range input<input id="input-rotation-range" type="range"
                                min="-360" value="0" max="360"></label></li>
                    <li class="menu-item close">Close</li>
                </ul>
            </div>
            <div class="sub-menu-container menu" id="draw-line-sub-menu">
                <ul class="menu">
                    <li class="menu-item">
                        <label><input type="radio" name="select-line-type" value="freeDrawing" checked="checked"> Free
                            drawing</label>
                        <label><input type="radio" name="select-line-type" value="lineDrawing"> Straight line</label>
                    </li>
                    <li class="menu-item">
                        <div id="tui-brush-color-picker">Brush color</div>
                    </li>
                    <li class="menu-item"><label class="menu-item no-pointer">Brush width<input
                                id="input-brush-width-range" type="range" min="5" max="30" value="12"></label></li>
                    <li class="menu-item close">Close</li>
                </ul>
            </div>
            <div class="sub-menu-container" id="draw-shape-sub-menu">
                <ul class="menu">
                    <li class="menu-item">
                        <label><input type="radio" name="select-shape-type" value="rect" checked="checked"> rect</label>
                        <label><input type="radio" name="select-shape-type" value="circle"> circle</label>
                        <label><input type="radio" name="select-shape-type" value="triangle"> triangle</label>
                    </li>
                    <li class="menu-item">
                        <select name="select-color-type">
                            <option value="fill">Fill</option>
                            <option value="stroke">Stroke</option>
                        </select>
                        <label><input type="radio" name="input-check-fill" id="input-check-transparent"
                                value="transparent">transparent</label>
                        <label><input type="radio" name="input-check-fill" id="input-check-filter"
                                value="filter">filter</label>
                        <div id="tui-shape-color-picker"></div>
                    </li>
                    <li class="menu-item"><label class="menu-item no-pointer">Stroke width<input
                                id="input-stroke-width-range" type="range" min="0" max="300" value="12"></label></li>
                    <li class="menu-item close">Close</li>
                </ul>
            </div>
            <div class="sub-menu-container" id="icon-sub-menu">
                <ul class="menu">
                    <li class="menu-item">
                        <div id="tui-icon-color-picker">Icon color</div>
                    </li>
                    <li class="menu-item border" id="btn-register-icon">Register custom icon</li>
                    <li class="menu-item icon-text" data-icon-type="arrow">➡</li>
                    <li class="menu-item icon-text" data-icon-type="cancel">✖</li>
                    <li class="menu-item close">Close</li>
                </ul>
            </div>
            <div class="sub-menu-container" id="text-sub-menu">
                <ul class="menu">
                    <li class="menu-item">
                        <div>
                            <button class="btn-text-style" data-style-type="b">Bold</button>
                            <button class="btn-text-style" data-style-type="i">Italic</button>
                            <button class="btn-text-style" data-style-type="u">Underline</button>
                        </div>
                        <div>
                            <button class="btn-text-style" data-style-type="l">Left</button>
                            <button class="btn-text-style" data-style-type="c">Center</button>
                            <button class="btn-text-style" data-style-type="r">Right</button>
                        </div>
                    </li>
                    <li class="menu-item"><label class="no-pointer"><input id="input-font-size-range" type="range"
                                min="10" max="100" value="10"></label></li>
                    <li class="menu-item">
                        <div id="tui-text-color-picker">Text color</div>
                    </li>
                    <li class="menu-item close">Close</li>
                </ul>
            </div>
            <div class="sub-menu-container" id="filter-sub-menu">
                <ul class="menu">
                    <li class="menu-item border input-wrapper">
                        Load Mask Image
                        <input type="file" accept="image/*" id="input-mask-image-file">
                    </li>
                    <li class="menu-item" id="btn-apply-mask">Apply mask filter</li>
                    <li class="menu-item close">Close</li>
                </ul>
            </div>
            <div class="sub-menu-container" id="image-filter-sub-menu">
                <ul class="menu">
                    <li class="menu-item align-left-top">
                        <table>
                            <tbody>
                                <tr>
                                    <td><label><input type="checkbox" id="input-check-grayscale">Grayscale</label></td>
                                    <td><label><input type="checkbox" id="input-check-invert">Invert</label></td>
                                    <td><label><input type="checkbox" id="input-check-sepia">Sepia</label></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" id="input-check-sepia2">Sepia2</label></td>
                                    <td><label><input type="checkbox" id="input-check-blur">Blur</label></td>
                                    <td><label><input type="checkbox" id="input-check-sharpen">Sharpen</label></td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" id="input-check-emboss">Emboss</label></td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                    <li class="menu-item align-left-top">
                        <p>
                            <label><input type="checkbox" id="input-check-remove-white">RemoveWhite</label><br>
                            <label>Threshold<input class="range-narrow" id="input-range-remove-white-threshold"
                                    type="range" min="0" value="60" max="255"></label><br>
                            <label>Distance<input class="range-narrow" id="input-range-remove-white-distance"
                                    type="range" min="0" value="10" max="255"></label>
                        </p>
                    </li>
                    <li class="menu-item align-left-top">
                        <p>
                            <label><input type="checkbox" id="input-check-brightness">Brightness</label><br>
                            <label>Value<input class="range-narrow" id="input-range-brightness-value" type="range"
                                    min="-255" value="100" max="255"></label>
                        </p>
                    </li>
                    <li class="menu-item align-left-top">
                        <p>
                            <label><input type="checkbox" id="input-check-noise">Noise</label><br>
                            <label>Value<input class="range-narrow" id="input-range-noise-value" type="range" min="0"
                                    value="100" max="1000"></label>
                        </p>
                    </li>
                    <li class="menu-item align-left-top">
                        <p>
                            <label><input type="checkbox" id="input-check-color-filter">ColorFilter</label><br>
                            <label>Threshold<input class="range-narrow" id="input-range-color-filter-value" type="range"
                                    min="0" value="45" max="255"></label>
                        </p>
                    </li>
                    <li class="menu-item align-left-top">
                        <p>
                            <label><input type="checkbox" id="input-check-pixelate">Pixelate</label><br>
                            <label>Value<input class="range-narrow" id="input-range-pixelate-value" type="range" min="2"
                                    value="4" max="20"></label>
                        </p>
                    </li>
                    <li class="menu-item align-left-top">
                        <p>
                            <label><input type="checkbox" id="input-check-tint">Tint</label><br>
                        <div id="tui-tint-color-picker"></div>
                        <label>Opacity<input class="range-narrow" id="input-range-tint-opacity-value" type="range"
                                min="0" value="1" max="1" step="0.1"></label>
                        </p>
                    </li>
                    <li class="menu-item align-left-top">
                        <p>
                            <label><input type="checkbox" id="input-check-multiply">Multiply</label>
                        <div id="tui-multiply-color-picker"></div>
                        </p>
                    </li>
                    <li class="menu-item align-left-top">
                        <p>
                            <label><input type="checkbox" id="input-check-blend">Blend</label>
                        <div id="tui-blend-color-picker"></div>
                        <select name="select-blend-type">
                            <option value="add" selected>Add</option>
                            <option value="diff">Diff</option>
                            <option value="diff">Subtract</option>
                            <option value="multiply">Multiply</option>
                            <option value="screen">Screen</option>
                            <option value="lighten">Lighten</option>
                            <option value="darken">Darken</option>
                        </select>
                        </p>
                    </li>
                    <li class="menu-item close">Close</li>
                </ul>
            </div>
        </div>
        <div class="tui-image-editor"></div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.0/fabric.js"></script>
    <script type="text/javascript"
        src="https://uicdn.toast.com/tui.code-snippet/v1.5.0/tui-code-snippet.min.js"></script>
    <script type="text/javascript"
        src="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/tui-image-editor@3.9.0/dist/tui-image-editor.min.js"></script>
    <script src="../js/theme/white-theme.js"></script>
    <script src="../js/theme/black-theme.js"></script>
    <script src="../js/service-basic.js"></script>
</body>

</html>