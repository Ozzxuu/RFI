$files = scandir('.');
foreach($files as $file) {
    if($file == '.' || $file == '..') continue;
    print $file . '<br>';
}
