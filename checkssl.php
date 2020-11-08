<?php
/*
@Author : bruno.lesdema@gmail.com
@Description : 
    Ce script permet de récupérer le temps restant 
    Durée de validité d'un certificat SSL par exemple LetsEncrypt    
*/


// $domain="yourdomain.tdl";
// $command="echo | openssl s_client -connect $domain:443 -servername $domain 2>/dev/null | openssl x509 -noout -dates";
// exec($command, $output);
// echo "<pre>output: \n"; var_dump( $output ); echo "</pre>";



function checkssl($domain)
{    
    $command="echo | openssl s_client -connect $domain:443 -servername $domain 2>/dev/null | openssl x509 -noout -dates";
    exec($command, $output);
    echo "<pre> CheckSSL for : [$domain]  \n   </pre> ";
    echo "<pre>output: \n"; var_dump( $output ); echo "</pre>";
}


?>
