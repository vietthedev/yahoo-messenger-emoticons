<?php
/*
Plugin Name: Yahoo Messenger Emoticons
Plugin URI: http://www.zambesc.com/yahoo-messenger-emoticons-wordpress-plugin/
Description: This plugin is design to replace the wordpress default smilies with the emoticons used on Yahoo Messenger
Author: Andrei Dutu
Version: 0.3
Author URI: http://www.zambesc.com
*/

function emoticons($content) 
{
require_once("class.emoticons.php");
$object = new prepare_string();
$content = $object -> replace ( $content );
return $content;
}

function emoticons_options_page() {
    if (function_exists('add_options_page')) {
        add_options_page('Yahoo Messenger Emoticons', 'Yahoo Messenger Emoticons', 8, basename(__FILE__), 'emoticons_admin_panel');
    }
}

function  emoticons_admin_panel() 
{
   echo '<p><h2>Select between the <a href="http://messenger.yahoo.com/features/emoticons/" target="_blank">normal emoticons</a> or the <a href="http://www.zambesc.com/emoticoane-smileys-mari-pentru-yahoo-messenger/" target="_blank">big emoticons</a></h2></p><br />';
    
  if(isset($_POST['submitted']))
    {
        
        if($_POST["style_emoticon"] == "")
            $_POST["style_emoticon"] = "default";
    
        $settings = array (
                "style_emoticon"                        => $_POST["style_emoticon"],
        );
        update_option('ym_emoticons_array', $settings);
        
        echo "<div id=\"message\" class=\"updated fade\"><p><strong>Yahoo Messenger Emoticons plugin options updated.</strong></p></div>";
    }

    $settings = get_option('ym_emoticons_array');
    
    $style_emoticon = $settings["style_emoticon"];
     
    ?>
<form method="post" name="options" target="_self">
<table style="width:200px;" border="0">
      <tr>
        <td style="width:100px;"><strong>Normal</strong></td>
        <td>
            <input type="radio" name="style_emoticon" value="default" <?php
            if( $style_emoticon == "default" || $style_emoticon == "" )
            {
                echo 'checked="checked"';
            }
            ?>/>
        </td>
    </tr>
    <tr>
        <td><strong>Big</strong></td>
        <td>
            <input type="radio" name="style_emoticon" value="big" <?php
            if($style_emoticon == "big")
            {
                echo 'checked="checked"';
            }
            ?>/>
            
        </td>
    </tr>
</table>
    <p class="submit">
        <input name="submitted" type="hidden" value="yes" />
        <input type="submit" name="Submit" value="Update Settings &raquo;" />
    </p>
</form>
<?php

}

add_action('admin_menu', 'emoticons_options_page');   
add_filter('the_content','emoticons');
add_filter('comment_text','emoticons');
?>