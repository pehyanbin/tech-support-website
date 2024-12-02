<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form PHP</title>

        <link rel="stylesheet" href="formphp_styles.css">
    </head>

    <body>
        <?php
        $name = $_GET["name"];
        $model = $_GET["model"];
        $issues = $_GET["issues"];
        $contact = $_GET["contact"];

        echo "<h1>Customer Feedback</h1>";

        echo "
        <section class='section1'>
            <table>
                <tr id='tableheader'>
                    <td>Name</td>
                    <td>Model</td>
                    <td>Issues</td>
                    <td>Contact</td>
                </tr>
                
                <tr>
                    <td>$name</td>
                    <td>$model</td>
                    <td>$issues</td>
                    <td>$contact</td>
                </tr>
            </table>
        </section>
        ";
        ?>
    </body>
</html>