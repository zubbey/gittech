  $email = 'com.zubbey@hotmail.com';
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, 'https://api.paystack.co/customer/'.$email);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


  $headers = array();
  $headers[] = 'Authorization: Bearer sk_test_f89bb31f1bda1cdb1f77d255987843b82f1a8e56';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $result = curl_exec($ch);
  if($result){

    $cusdata = json_decode($result);

    echo "<pre>";
    echo var_dump($cusdata);
    echo "</pre>";

    //IF I DO THIS
    $cusdata->data->first_name;
    //i get the firstname ..chibike

    //but i need to get the subscription_code
  }

  if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
  }
  curl_close($ch);
