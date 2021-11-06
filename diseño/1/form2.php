<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Document html">
    <meta name="author" content="Ahmed R.">
    <meta name="keywords" content="computers,programing,web design,html,html5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="lang" content="es-ES">
    <title>Document</title>
</head>
<body>
    <main id="contenido">
        <?php
            $a = $_POST['mat'];

            if (isset($a)) {
                echo $a;
            }

            else {        
        ?>
                <form name="matF" method="post" action="#">
                    <fieldset>
                        <legend>ILLOOO</legend>
                        <p>
                            <label for="mat">Matricula: </label>
                            <input type="text" name="mat" id="mat" size="8" pattern="\d{4}(\s|(-))?[BCDFGHJKLMNPRSTVWXYZ]{3}">
                        </p>
                        <p>
                            <label for="nose">Nosequesto: </label>
                            <input type="text" name="nose" id="nose" size="8" pattern="(?={8,}$)([A-Z][13579].*[a-z]{2})">
                        </p>
                        <p>
                            <label for="nose2">Nosequesto2: </label>
                            <input type="text" name="nose2" id="nose2" size="8" pattern="[A-Za-z]{1,2}[^6-9\s]*@[^6-9\s]*[0-5]">
                        </p>
                        <p>
                            <label for="nose3">Nosequesto3: </label>
                            <input type="text" name="nose3" id="nose3" size="8" pattern="[2468]([13579]\.?[02468])*[1357]">
                        </p>
                        <p>
                            <label for="nose4">Nosequesto4: </label>
                            <input type="text" name="nose4" id="nose4" size="8" pattern="[b-df-hj-np-tv-z]*([aeiou][b-df-hj-np-tv-z]+){2}[aeiou][b-df-hj-np-tv-z]*">
                        </p>
                        <p>
                            <label for="nose4">Nosequesto5: </label>
                            <input type="text" name="nose5" id="nose5" size="8" pattern="(?=.{8,}$)(?=.*[A-Z])(?=.*[a-z])(?=.*\d).+">
                        </p>
                        <p>
                            <label for="nose4">Nosequesto6: </label>
                            <input type="text" name="nose6" id="nose6" size="8" pattern="(?!.*(00|11|22|33|44|55).*)[0-5]{5}">
                        </p>
                        <p>
                            <label for="nose4">Nosequesto7: </label>
                            <input type="text" name="nose7" id="nose7" size="8" pattern="(?=.{6,}$)(?!.*[aeiou]{2}[AEIOU])[AEIOU][aeiouAEIOU]*[aeiou]">
                        </p>
                        <p>
                            <label for="nose4">Nosequesto8: </label>
                            <input type="text" name="nose8" id="nose8" size="8" pattern="(?=.{6,}$)(?!.*\d{2})(?!.*[A-Z]{2})\w*">
                        </p>
                        <p>
                            <label for="nose4">Nosequesto9: </label>
                            <input type="text" name="nose9" id="nose9" size="8" pattern="(?=.{6,8}$)([0-9]*[02468])|([0-9]*([A-Z]([0-9][0-9]+))*[A-Z]([0-9]+[02468]))">
                        </p>
                        <p>
                            <label for="nose4">Nosequesto10: </label>
                            <input type="text" name="nose10" id="nose10" size="8" pattern="(?=.{3,6}$)(?=.*[0-5])(?=.*[aeiou])(?!.*[aeiou]0)[a-z0-9]+">
                        </p>
                        <p>
                            <label for="nose4">Nosequesto11: </label>
                            <input type="text" name="nose11" id="nose11" size="8" pattern="(?=.{2,5}$)(?=.*(00|11|22|33|44|55|66|77|88|99))(?!.*[aeiouAEIOU]{3})\w+">
                        </p>
                        <p>
                            <input type="submit" value="Enviar">
                        </p>
                    </fieldset>
                </form> 
        <?php
            }
        ?>
    </main>
</body>
</html>