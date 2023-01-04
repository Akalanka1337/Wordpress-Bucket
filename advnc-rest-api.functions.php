function getResearchInterestsMeta(){ //CS Result API -1-
    register_rest_route('cs_research_meta/v1', 'search/(?P<id>\d+)', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'csResearchResults'
    ));
}


function csResearchResults($data){ //CS ResarchInterest Meta Result Return -1-
    global $wpdb;
    $finalResult = [];
    $post_ID = $data['id'];
    $mataD = "SELECT -------";
    $postD = "SELECT -------";
    array_push($finalResult, array(
        'metaData' => $wpdb->get_results($mataD),
        'postData' => $wpdb->get_results($postD)
    ));
    return $finalResult;
}

add_action('rest_api_init', 'getResearchInterestsMeta'); //CS Action -1-
