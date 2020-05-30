<?php 
$tipe = $_POST['tipe'];

// function dataindo(){
//     $ch = curl_init(); 
//     curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/indonesia/");
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
//     $output = curl_exec($ch);   
//     curl_close($ch);    
//     // echo $output;

//     $data = json_decode($output, TRUE);
//     print_r($data);
//     // print_r($data);
// }

// cetak data corona
if($tipe=="dataindo"){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/indonesia/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch);   
    curl_close($ch);    
    // echo $output;

    $data = json_decode($output, TRUE);

    foreach($data as $row){
        $positif = $row['positif'];
    }
}
?>