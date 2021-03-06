<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Emotion API Sample</title>
    <link rel="stylesheet" href="css/site.css">
    <script src="scripts/jquery-3.1.0.min.js"></script>
    <script src="scripts/script.php"></script>
</head>
<body>
    <div>
        <h1>Microsoft Cognitive Services 1</h1>
        <h2>Emotion API Sample</h2>
        <!--画像のURLを入力-->
        <input type="url" id="imageUrlTextbox" class="urlinput">
    </div>

    <table>
        <tr>
            <td class="OutputTh">
                <!--出力結果-->
                <div id="OutputDiv">Output</div>
            </td>
            <td>
                <!--出力画像-->            
                <div id="PhotoDiv">
                <img id="ImageToAnalyze">
                <img src="image/Rectangle.png" id="Rectangle">
                </div>
            </td>
        </tr>
    </table>
</body>
</html>