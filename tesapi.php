<?php 
function tes(){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/indonesia/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch);   
    curl_close($ch);    
    // echo $output;

    $data = json_decode($output, TRUE);
    return $data;
}
    // print_r($data);
    foreach(tes() as $row){
        echo $row['positif'];
    }

    // foreach($data as $row => $key){
    //     // echo $row['Provinsi'];
    //     foreach($key as $r);
    //     echo "Kode Provinsi : ".$r['Kode_Provi']."<br>";
    //     echo "Provinsi : ".$r['Provinsi']."<br>";
    //     echo "Positif : ".$r['Kasus_Posi']."<br>";
    //     echo "Sembuh : ".$r['Kasus_Semb']."<br>";
    //     echo "Meninggal : ".$r['Kasus_Meni']."<br><br>";
    // }
    
?>

<?php
// // Create a curl handle to a non-existing location
// $ch = curl_init('https://sandbox.rachmat.id/curl/');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// if(curl_exec($ch) === false)
// {
//     echo 'Curl error: ' . curl_error($ch);
// }
// else
// {
//     echo 'Operation completed without any errors';
// }

// // Close handle
// curl_close($ch);
?>