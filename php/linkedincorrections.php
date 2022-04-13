<form action="" method="post">
    <input type="text" name="search">
    <button>post</button>
</form>
<?php
$search_html = filter_input(INPUT_POST, 'search', FILTER_VALIDATE_EMAIL);
$search_url = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_ENCODED);
echo "You have searched for $search_html.\n";
echo "<a href='?search=$search_url'>Search again.</a>";
?>

