<!DOCTYPE html>
<html>

    <head>
    <link rel="stylesheet" href="external.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript">
            function validateForm() {
                var a = document.forms["Form"]["firstfield"].value;
                var b = document.forms["Form"]["secondfield"].value;
                var c = document.forms["Form"]["thirdfield"].value;
                var d = document.forms["Form"]["fourthfield"].value;
                if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "") {
                    alert("Please Fill All Required Field");
                    return false;
                }
            }
        </script>
    </head>

    <body>
    <?php  include ( "php.php");
    ?>
        <div class="container">
            <form action="php.php" method="post" name="php" onsubmit="return validateForm()">
                <input type="hidden" name="processform" value="1">
                <div class="row">
                    <div class="col-25">
                        <label for="field">* Field 1:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="field1" name="firstfield" placeholder="Value...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="field">* Field 2:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="field2" name="secondfield" placeholder="Value...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="field">* Field 3:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="field3" name="thirdfield" placeholder="Value...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="field">* Field 4:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="field4" name="fourthfield" placeholder="Value...">
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
            * Required fields.
        </div>

    </body>

</html>