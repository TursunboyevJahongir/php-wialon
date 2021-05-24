<?
    include('wialon.php');
    $wialon_api = new Wialon();

    // old username and password login is deprecated, use token login
    $token = 'Your token here';
    $result = $wialon_api->login($token);
    $json = json_decode($result, true);
    if (!isset($json['error'])) {
        // echo $result;
        // var_dump($json['user']);
        echo $json['user']['nm'];
        // echo $wialon_api->core_search_item('{"id":717359,"flags":0x1}');
        $wialon_api->logout();
    } else {
        echo WialonError::error($json['error']);
    }
