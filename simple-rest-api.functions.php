function getResearchInterestsMeta(){ //CS Result API -1-
    register_rest_route('cs_research_meta/v1', 'search/(?P<id>\d+)', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'csResearchResults'
    ));
}


function csResearchResults($data){ //CS Result Return -1-
    $post_ID = $data['id'];
    return 'cyberscap'. $post_ID;
}

add_action('rest_api_init', 'getResearchInterestsMeta'); //CS Action -1-
