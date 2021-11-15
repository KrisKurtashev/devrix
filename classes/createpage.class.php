<?php


Class CreatePage
{
    private  $pageName;
    private  $pageSlug;
    private $pageTemplate;

    public function __construct($pageName, $pageSlug, $pageTemplate)
    {
        $this->pageName = $pageName;
        $this->pageSlug = $pageSlug;
        $this->pageTemplate = $pageTemplate;

        $this->autoCreatePage($this->pageName, $this->pageSlug, $this->pageTemplate);
    }

    private function autoCreatePage($pageName, $pageSlug, $pageTemplate)
    {
        $check_page_exist = get_page_by_title($pageName, 'OBJECT', 'page');

        if(empty($check_page_exist)) {
            $page_id = wp_insert_post(
                array(
                    'comment_status' => 'close',
                    'ping_status'    => 'close',
                    'post_author'    => 1,
                    'post_title'     => ucwords($pageName),
                    'post_name'      => strtolower(str_replace(' ', '-', trim($pageSlug))),
                    'post_status'    => 'publish',
                    'post_content'   => 'Content of the page',
                    'post_type'      => 'page',
                )
            );

            update_post_meta( $page_id, '_wp_page_template', $pageTemplate );
        }
    }
}