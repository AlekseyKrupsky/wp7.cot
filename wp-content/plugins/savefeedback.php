<?php
/*
 Plugin Name: Contact form feedback
Description: Create page with contact form feedback
 * */

register_activation_hook(__FILE__,'create_feedback_table');

function create_feedback_table() {
    global $wpdb;
    $table_name = $wpdb->prefix.'feedback';

    $sql = 'CREATE TABLE '.$table_name.'(
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        subject VARCHAR(255) NOT NULL,
        message text NOT NULL,
          date datetime NOT NULL,
          UNIQUE KEY id(id)
    );';

    require_once ABSPATH.'/wp-admin/includes/upgrade.php';
    dbDelta($sql);

}


add_Action('admin_menu','add_feedback_page');

function add_feedback_page() {
    add_menu_page('Feedback','Feedback','manage_options','feedback','show_feedback_page');

}


function show_feedback_page() {
    global $wpdb;
    $table_name = $wpdb->prefix.'feedback';

    $results = $wpdb->get_results('SELECT * FROM '.$table_name);

    ?>
    <h1>Feedback</h1>
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Subject</td>
            <td>Message</td>
            <td>Date</td>
        </tr>
        <?
        foreach ($results as $result):?>
        <tr>
            <td><?=$result->id?></td>
            <td><?=$result->name?></td>
            <td><?=$result->email?></td>
            <td><?=$result->subject?></td>
            <td><?=$result->message?></td>
            <td><?=$result->date?></td>
        </tr>
        <?endforeach;?>
    </table>

    <?
}


add_action('wpcf7_before_send_mail','save_feedback');


function save_feedback() {
    global $wpdb;
    $table_name = $wpdb->prefix.'feedback';


    $wpdb->insert($table_name,[
       'name'=>$_POST['your-name'],
       'email'=>$_POST['your-email'],
       'subject'=>$_POST['your-subject'],
       'message'=>$_POST['your-message'],
       'date'=>date('Y-m-d H:i:s',time()),
    ]);

}