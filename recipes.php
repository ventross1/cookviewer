<?php
require_once ("SmartCookClient.php");
$request = ["attributes" => ["name", "description", "author"]];
try {
    $data = (new SmartCookClient)
        ->setRequestData($request)
        ->sendRequest("recipes")
        ->getResponseData();
} catch (Exception $e) {
    echo $e->getMessage();
}
$recipes = "";
$tempRecipe = file_get_contents("recipe.html");
foreach ($data['data'] as $recipe) {
    $desc = $recipe["description"];
    $recipes .= str_replace(
        ["{name}", "{description}", "{author}"],
        [$recipe["name"], $desc, $recipe["author"]],
        $tempRecipe
    );
}
echo $recipes;
