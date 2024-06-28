<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != "替换成你的用户名" || $_SERVER['PHP_AUTH_PW'] != "替换成你的密码") {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'sorry! you are not allowed to see this page.';
    exit;
} 

else{
    header('Content-Type: text/html; charset=utf-8');
    switch($_GET['cmd']){
        case "get_json":
            if (strstr($_GET['url'], 'youtube')!==false) {
                   $output = shell_exec('yt-dlp -j ' . $_GET['url'] . ' --extractor-arg "youtube:player_client=mediaconnect"');
        echo "$output";
                }
            else{
                   $output = shell_exec('yt-dlp -j ' . $_GET['url']);
        echo "$output";
            }
     
        break;
        case "update":
        $output = shell_exec('yt-dlp -U');
        echo "$output";
        break;
        default:
        echo "invalid argument";
        break;  
    }
}
?>
