<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Selector</title>
</head>
<body>
    <h2>Select Your Preferred Language</h2>
    
    <form action="/change-language" method="post">
        <fieldset>
            <legend>Choose Language</legend>
            
            <label for="language">Select Language:</label><br>
            <select id="language" name="language" required>
                <option value="en">English</option>
                <option value="bn">বাংলা (Bengali)</option>
                <option value="es">Español (Spanish)</option>
                <option value="fr">Français (French)</option>
                <option value="de">Deutsch (German)</option>
                <option value="zh">中文 (Chinese)</option>
                <option value="ar">العربية (Arabic)</option>
                <option value="hi">हिंदी (Hindi)</option>
            </select><br><br>
            
            <button type="submit">Apply Language</button>
        </fieldset>
    </form>
</body>
</html>
