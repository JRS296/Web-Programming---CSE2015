<?php
$errors = [];
$fields = ['name', 'address', 'email', 'howMany', 'favoriteFruit', 'brochure'];
$optionalFields = ['brochure'];
$values = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($fields as $field) {
        if (empty($_POST[$field]) && !in_array($field, $optionalFields)) {
            $errors[] = $field;
        } else {
            $values[$field] = $_POST[$field];
        }
    }
    if (empty($errors)) {
        foreach ($fields as $field) {
            if ($field === "favoriteFruit") {
                printf("%s: %s<br />", $field, var_export($_POST[$field], TRUE));
            } else {
                printf("%s: %s<br />", $field, $_POST[$field]);
            }
        };
        exit;
    }
}
>