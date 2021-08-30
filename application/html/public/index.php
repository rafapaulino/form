<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.9/tailwind.min.css" integrity="sha512-SvJR34InARUfJb279ipE/gjQqX11MDKaly9MNb0vevuWQJmZ23UH7F/65ScEsvLI+myKGbdfA1En82wVSCHQ8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    body {
        padding: 50px;
    }
</style>
</head>
<body class="font-sans antialiased text-gray-600 min-h-full flex flex-col ">
<?php 

require_once '../vendor/autoload.php';

use Form\InputText;

$input = new InputText;
$input->render();

?>
</body>
</html>