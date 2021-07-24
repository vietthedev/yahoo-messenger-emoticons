<?php
class prepare_string
{

    function replace( $string )
    {
        
        $output = '';
        $textarr = preg_split("/(<\/?p[^>]*>)|(<\/?a[^>]*>)|(<\/?object[^>]*>)|(<\/?img[^>]*>)|(<\/?embed[^>]*>)|(<\/?strong[^>]*>)|(<\/?b[^>]*>)|(<\/?i[^>]*>)|(<\/?em[^>]*>)/U", $string, -1, PREG_SPLIT_DELIM_CAPTURE); 
        $stop = count($textarr);
        
        for ($i = 0; $i < $stop; $i++)
            {
                $content = $textarr[$i];
                    if ((strlen($content) > 0) && ('<' != $content{0}))
                    { 
                        $content = $this -> replace_chars( $content ) ;
                    }
                    $output .= $content;
            }
        
        return $output;
        
    }
        
    private function replace_chars( $str )
    {      
     $settings = get_option('ym_emoticons_array');
     $style_emoticon = $settings["style_emoticon"]; 
         
        $emoticons_url = get_option('siteurl') . '/wp-content/plugins/yahoo-messenger-emoticons/emoticons/';
        $emoticon_size ='_big'; 
        if ($style_emoticon == 'big') { $emoticon_size = '_big';}
        else  $emoticon_size ='';

         $replacements = array(

 

			  ':)' => '<img src="'. $emoticons_url.'happy'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="happy" />',

			  ':-)' => '<img src="'. $emoticons_url.'happy'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="happy" />',			  

			  ':(' => '<img src="'. $emoticons_url.'sad'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="sad" />',

			  ':-(' => '<img src="'. $emoticons_url.'sad'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="sad" />',			  

			  ';)' => '<img src="'. $emoticons_url.'winking'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="winking" />',

			  ';-)' => '<img src="'. $emoticons_url.'winking'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="winking" />',

			  ':D' => '<img src="'. $emoticons_url.'big_grin'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="big grin" />',

			  ':d' => '<img src="'. $emoticons_url.'big_grin'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="big grin" />',

              ':-D' => '<img src="'. $emoticons_url.'big_grin'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="big grin" />',

              ':-d' => '<img src="'. $emoticons_url.'big_grin'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="big grin" />',

			  ';;)' => '<img src="'. $emoticons_url.'batting_eyelashes'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="batting eyelashes" />',

			  '>:D<' => '<img src="'. $emoticons_url.'big_hug'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="big hug" />',

			  '&gt;:D&lt;' => '<img src="'. $emoticons_url.'big_hug'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="big hug" />', 			  

			  '>:d<' => '<img src="'. $emoticons_url.'big_hug'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="big hug" />',

			  '&gt;:d&lt;' => '<img src="'. $emoticons_url.'big_hug'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="big hug" />', 			   

			  ':-/' => '<img src="'. $emoticons_url.'confused'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="confused" />',

              ':-\\' => '<img src="'. $emoticons_url.'confused'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="confused" />',

			':s' => '<img src="'. $emoticons_url.'confused'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="confused" />',

				':S' => '<img src="'. $emoticons_url.'confused'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="confused" />',

			  ':x' => '<img src="'. $emoticons_url.'love_struck'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="love struck" />', 

			  ':X' => '<img src="'. $emoticons_url.'love_struck'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="love struck" />', 

			  ':">' => '<img src="'. $emoticons_url.'blushing'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="blushing" />',

			  ':&#8221;>' => '<img src="'. $emoticons_url.'blushing'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="blushing" />',

			  ':"&gt;' => '<img src="'. $emoticons_url.'blushing'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="blushing" />',

			  ':&#8221;&gt;' => '<img src="'. $emoticons_url.'blushing'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="blushing" />',

			  ':&quot;>' => '<img src="'. $emoticons_url.'blushing'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="blushing" />',

			  ':&quot;&gt;' => '<img src="'. $emoticons_url.'blushing'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="blushing" />',

			  ':p' => '<img src="'. $emoticons_url.'tongue'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="tongue" />', 

			  ':P' => '<img src="'. $emoticons_url.'tongue'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="tongue" />', 

			  ':-p' => '<img src="'. $emoticons_url.'tongue'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="tongue" />', 

			  ':-P' => '<img src="'. $emoticons_url.'tongue'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="tongue" />', 

			  ':-*' => '<img src="'. $emoticons_url.'kiss'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="kiss" />', 

			  ':*' => '<img src="'. $emoticons_url.'kiss'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="kiss" />', 

			  '=((' => '<img src="'. $emoticons_url.'broken_heart'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="broken heart" />', 

			  ':O' => '<img src="'. $emoticons_url.'surprise'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="surprise" />',

              ':o' => '<img src="'. $emoticons_url.'surprise'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="surprise" />', 
              
              ':-O' => '<img src="'. $emoticons_url.'surprise'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="surprise" />',

			  ':-o' => '<img src="'. $emoticons_url.'surprise'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="surprise" />', 

			  'X(' => '<img src="'. $emoticons_url.'angry'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="angry" />', 

			  'x(' => '<img src="'. $emoticons_url.'angry'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="angry" />', 

			  'X-(' => '<img src="'. $emoticons_url.'angry'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="angry" />', 

			  'x-(' => '<img src="'. $emoticons_url.'angry'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="angry" />', 

			  ':>' => '<img src="'. $emoticons_url.'smug'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="smug" />', 

			  ':&gt;' => '<img src="'. $emoticons_url.'smug'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="smug" />',

			  ':->' => '<img src="'. $emoticons_url.'smug'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="smug" />', 

			  ':-&gt;' => '<img src="'. $emoticons_url.'smug'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="smug" />',			  

			  'B-)' => '<img src="'. $emoticons_url.'cool'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="cool" />', 

			  'b-)' => '<img src="'. $emoticons_url.'cool'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="cool" />', 

			  ':-S' => '<img src="'. $emoticons_url.'worried'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="worried" />',

			':-s' => '<img src="'. $emoticons_url.'worried'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="worried" />',

			'#:-S' => '<img src="'. $emoticons_url.'whew'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="whew" />',

			'#:-s' => '<img src="'. $emoticons_url.'whew'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="whew" />',

			'>:)' => '<img src="'. $emoticons_url.'devil'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="devil" />',

			'&gt;:)' => '<img src="'. $emoticons_url.'devil'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="devil" />',

			  ':((' => '<img src="'. $emoticons_url.'crying'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="crying" />', 

			  ':))' => '<img src="'. $emoticons_url.'laughing'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="laughing" />', 

			  ':|' => '<img src="'. $emoticons_url.'straight_face'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="straight face" />', 

			   '/:)' => '<img src="'. $emoticons_url.'raised_eyebrows'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="raised eyebrows" />', 

			'=))' => '<img src="'. $emoticons_url.'rolling_on_the_floor'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="rolling on the floor" />',

			  'O:-)' => '<img src="'. $emoticons_url.'angel'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="angel" />', 

			  'o:-)' => '<img src="'. $emoticons_url.'angel'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="angel" />',

			'o:)' => '<img src="'. $emoticons_url.'angel'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="angel" />',			  

			'O:)' => '<img src="'. $emoticons_url.'angel'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="angel" />',

			':-B' => '<img src="'. $emoticons_url.'nerd'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="nerd" />',			

			  ':-b' => '<img src="'. $emoticons_url.'nerd'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="nerd" />', 

			  ':b' => '<img src="'. $emoticons_url.'nerd'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="nerd" />',

			  ':B' => '<img src="'. $emoticons_url.'nerd'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="nerd" />', 

			  '=;' => '<img src="'. $emoticons_url.'talk_to_the_hand'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="talk to the hand" />', 

			  ':-c' => '<img src="'. $emoticons_url.'call_me'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="call me" />', 

			  ':-C' => '<img src="'. $emoticons_url.'call_me'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="call me" />',

			  ':)]' => '<img src="'. $emoticons_url.'on_the_phone'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="on the phone" />', 

			  '~X(' => '<img src="'. $emoticons_url.'at_wits_end'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="at wits end" />', 

			  '~x(' => '<img src="'. $emoticons_url.'at_wits_end'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="at wits end" />', 

			  ':-h' => '<img src="'. $emoticons_url.'wave'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="wave" />',  

			  ':-H' => '<img src="'. $emoticons_url.'wave'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="wave" />', 

			  ':-t' => '<img src="'. $emoticons_url.'time_out'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="time out" />', 

			  ':-T' => '<img src="'. $emoticons_url.'time_out'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="time out" />', 

			  '8->' => '<img src="'. $emoticons_url.'day_dreaming'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="day dreaming" />', 

			  '8-&gt;' => '<img src="'. $emoticons_url.'day_dreaming'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="day dreaming" />', 

			  'I-)' => '<img src="'. $emoticons_url.'sleepy'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="sleepy" />', 

			  'i-)' => '<img src="'. $emoticons_url.'sleepy'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="sleepy" />', 

			  '8-|' => '<img src="'. $emoticons_url.'rolling_eyes'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="rolling eyes" />',

			  'L-)' => '<img src="'. $emoticons_url.'loser'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="loser" />', 

			   'l-)' => '<img src="'. $emoticons_url.'loser'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="loser" />', 

			  ':-&' => '<img src="'. $emoticons_url.'sick'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="sick" />',

			  ':-&amp;' => '<img src="'. $emoticons_url.'sick'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="sick" />', 

			  ':-&#038;' => '<img src="'. $emoticons_url.'sick'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="sick" />', 

			  ':-$' => '<img src="'. $emoticons_url.'dont_tell_anyone'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="dont tell anyone" />', 

			  '[-(' => '<img src="'. $emoticons_url.'no_talking'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="no talking" />',  

			  ':O)' => '<img src="'. $emoticons_url.'clown'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="clown" />', 

			 ':o)' => '<img src="'. $emoticons_url.'clown'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="clown" />',

			  '8-}' => '<img src="'. $emoticons_url.'silly'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="silly" />', 

			  '<:-P' => '<img src="'. $emoticons_url.'party'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="party" />',

			  '<:-p' => '<img src="'. $emoticons_url.'party'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="party" />',

			  '&lt;:-P' => '<img src="'. $emoticons_url.'party'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="party" />',

			  '&lt;:-p' => '<img src="'. $emoticons_url.'party'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="party" />', 

			  '(:|' => '<img src="'. $emoticons_url.'yawn'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="yawn" />', 

			  '=P~' => '<img src="'. $emoticons_url.'drooling'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="drooling" />',

			  '=p~' => '<img src="'. $emoticons_url.'drooling'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="drooling" />', 

			  ':-?' => '<img src="'. $emoticons_url.'thinking'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="thinking" />',

			  '#-o' => '<img src="'. $emoticons_url.'doh'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="doh" />',

			  '#-O' => '<img src="'. $emoticons_url.'doh'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="doh" />', 

			  '=D>' => '<img src="'. $emoticons_url.'applause'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="applause" />',

			  '=d>' => '<img src="'. $emoticons_url.'applause'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="applause" />', 

			 '=D&gt;' => '<img src="'. $emoticons_url.'applause'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="applause" />',

			  '=d&gt;' => '<img src="'. $emoticons_url.'applause'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="applause" />',

			  ':-SS' => '<img src="'. $emoticons_url.'nail_biting'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="nail biting" />', 

			 ':-sS' => '<img src="'. $emoticons_url.'nail_biting'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="nail biting" />',

			 ':-Ss' => '<img src="'. $emoticons_url.'nail_biting'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="nail biting" />',

			 ':-ss' => '<img src="'. $emoticons_url.'nail_biting'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="nail biting" />',

			  '@-)' => '<img src="'. $emoticons_url.'hypnotized'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="hypnotized" />', 

			  ':^o' => '<img src="'. $emoticons_url.'liar'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="liar" />',  

			  ':^O' => '<img src="'. $emoticons_url.'liar'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="liar" />', 

			  ':-w' => '<img src="'. $emoticons_url.'waiting'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="waiting" />', 

			  ':-W' => '<img src="'. $emoticons_url.'waiting'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="waiting" />', 

			  ':-<' => '<img src="'. $emoticons_url.'sigh'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="sigh" />', 

			  ':-&lt;' => '<img src="'. $emoticons_url.'sigh'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="sigh" />',

			  '>:P' => '<img src="'. $emoticons_url.'phbbbbt'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="phbbbbt" />', 

			 '&gt;:P' => '<img src="'. $emoticons_url.'phbbbbt'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="phbbbbt" />', 

			  '>:p' => '<img src="'. $emoticons_url.'phbbbbt'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="phbbbbt" />', 

			 '&gt;:p' => '<img src="'. $emoticons_url.'phbbbbt'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="phbbbbt" />', 

			  '&lt;):)' => '<img src="'. $emoticons_url.'cowboy'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="cowboy" />', 

			 '<):)' => '<img src="'. $emoticons_url.'cowboy'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="cowboy" />', 

			  'X_X' => '<img src="'. $emoticons_url.'i_dont_want_to_see'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="i dont want to see" />', 

			  'x_x' => '<img src="'. $emoticons_url.'i_dont_want_to_see'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="i dont want to see" />', 

			  'x_X' => '<img src="'. $emoticons_url.'i_dont_want_to_see'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="i dont want to see" />', 

			  'X_x' => '<img src="'. $emoticons_url.'i_dont_want_to_see'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="i dont want to see" />', 

			  ':!!' => '<img src="'. $emoticons_url.'hurry_up'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="hurry up" />', 

			  '\m/' => '<img src="'. $emoticons_url.'rock_on'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="rock on" />',

			  '\M/' => '<img src="'. $emoticons_url.'rock_on'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="rock on" />',

			 ':-q' => '<img src="'. $emoticons_url.'thumbs_down'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="thumbs down" />', 

			  ':-Q' => '<img src="'. $emoticons_url.'thumbs_down'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="thumbs down" />',

			 ':-bd' => '<img src="'. $emoticons_url.'thumbs_up'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="thumbs up" />',

			  ':-bD' => '<img src="'. $emoticons_url.'thumbs_up'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="thumbs up" />', 

			 ':-BD' => '<img src="'. $emoticons_url.'thumbs_up'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="thumbs up" />',  

			  ':-Bd' => '<img src="'. $emoticons_url.'thumbs_up'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="thumbs up" />', 

			  '^#(^' => '<img src="'. $emoticons_url.'it_wasnt_me'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="it wasnt me" />', 

			  ':ar!' => '<img src="'. $emoticons_url.'pirate'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="pirate" />', 

			  ':aR!' => '<img src="'. $emoticons_url.'pirate'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="pirate" />', 

			  ':AR!' => '<img src="'. $emoticons_url.'pirate'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="pirate" />', 

			  ':Ar!' => '<img src="'. $emoticons_url.'pirate'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="pirate" />', 

			  ':o3' => '<img src="'. $emoticons_url.'puppy_dog_eyes'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="puppy dog eyes" />', 

			  ':O3' => '<img src="'. $emoticons_url.'puppy_dog_eyes'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="puppy dog eyes" />',  

			  ':-??' => '<img src="'. $emoticons_url.'i_dont_know'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="i dont know" />', 

			  '%-(' => '<img src="'. $emoticons_url.'not_listening'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="not listening" />', 

			  ':@)' => '<img src="'. $emoticons_url.'pig'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="pig" />', 

			  '3:-O' => '<img src="'. $emoticons_url.'cow'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="cow" />',

			  '3:-o' => '<img src="'. $emoticons_url.'cow'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="cow" />',

			  ':(|)' => '<img src="'. $emoticons_url.'monkey'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="monkey" />',

			  '~:>' => '<img src="'. $emoticons_url.'chicken'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="chicken" />',

			  '~:&gt;' => '<img src="'. $emoticons_url.'chicken'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="chicken" />',

			  '@};-' => '<img src="'. $emoticons_url.'rose'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="rose" />', 

			  '%%-' => '<img src="'. $emoticons_url.'good_luck'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="good luck" />', 

			  '**==' => '<img src="'. $emoticons_url.'flag'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="flag" />',

			  '~O)' => '<img src="'. $emoticons_url.'coffee'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="coffee" />', 

			  '(~~)' => '<img src="'. $emoticons_url.'pumpkin'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="pumpkin" />', 

			  '~o)' => '<img src="'. $emoticons_url.'coffee'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="coffee" />',

			  '*-:)' => '<img src="'. $emoticons_url.'idea'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="idea" />', 

			  '8-X' => '<img src="'. $emoticons_url.'skull'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="skull" />',

			  '8-x' => '<img src="'. $emoticons_url.'skull'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="skull" />',

			  '=:)' => '<img src="'. $emoticons_url.'bug'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="bug" />',

			  '>-)' => '<img src="'. $emoticons_url.'alien'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="alien" />',

			  '&gt;-)' => '<img src="'. $emoticons_url.'alien'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="alien" />',

			  ':-L' => '<img src="'. $emoticons_url.'frustrated'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="frustrated" />',

			  ':-l' => '<img src="'. $emoticons_url.'frustrated'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="frustrated" />',

			  '[-O<' => '<img src="'. $emoticons_url.'praying'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="praying" />',

			  '[-o<' => '<img src="'. $emoticons_url.'praying'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="praying" />',

			  '[-O&lt;' => '<img src="'. $emoticons_url.'praying'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="praying" />',

			  '[-o&lt;' => '<img src="'. $emoticons_url.'praying'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="praying" />',

			  '$-)' => '<img src="'. $emoticons_url.'money_eyes'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="money eyes" />',

			  ':-"' => '<img src="'. $emoticons_url.'whistling'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="whistling" />',

			  ':-&#8221;' => '<img src="'. $emoticons_url.'whistling'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="whistling" />',

			  ':-&quot;' => '<img src="'. $emoticons_url.'whistling'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="whistling" />',

			  'b-(' => '<img src="'. $emoticons_url.'feeling_beat_up'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="feeling beat up" />',

			  'B-(' => '<img src="'. $emoticons_url.'feeling_beat_up'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="feeling beat up" />',

			  ':)>-' => '<img src="'. $emoticons_url.'peace_sign'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="peace sign" />',

			  ':)&gt;-' => '<img src="'. $emoticons_url.'peace_sign'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="peace sign" />',

			  '[-X' => '<img src="'. $emoticons_url.'shame_on_you'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="shame on you" />',

			  '[-x' => '<img src="'. $emoticons_url.'shame_on_you'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="shame on you" />',

			  '\:D/' => '<img src="'. $emoticons_url.'dancing'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="dancing" />',

			  '\:d/' => '<img src="'. $emoticons_url.'dancing'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="dancing" />',

			  '>:/' => '<img src="'. $emoticons_url.'bring_it_on'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="bring it on" />',

			  '&gt;:/' => '<img src="'. $emoticons_url.'bring_it_on'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="bring it on" />',

			  ';))' => '<img src="'. $emoticons_url.'hee_hee'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="hee hee" />',

			  ':-@' => '<img src="'. $emoticons_url.'chatterbox'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="chatterbox" />',

			  '^:)^' => '<img src="'. $emoticons_url.'not_worthy'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="not worthy" />',

			  ':-j' => '<img src="'. $emoticons_url.'oh_go_on'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="oh go on" />',

			  ':-J' => '<img src="'. $emoticons_url.'oh_go_on'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="oh go on" />',

			  '(*)' => '<img src="'. $emoticons_url.'star'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="star" />',

			 'o-&gt;' => '<img src="'. $emoticons_url.'hiro'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="hiro" />',

			 'O-&gt;' => '<img src="'. $emoticons_url.'hiro'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="hiro" />',

			  'o->' => '<img src="'. $emoticons_url.'hiro'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="hiro" />',

			 'O->' => '<img src="'. $emoticons_url.'hiro'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="hiro" />',

			 'o=&gt;' => '<img src="'. $emoticons_url.'billy'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="billy" />',

			 'O=&gt;' => '<img src="'. $emoticons_url.'billy'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="billy" />',

			  'o=>' => '<img src="'. $emoticons_url.'billy'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="billy" />',

			 'O=>' => '<img src="'. $emoticons_url.'billy'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="billy" />',

			 'O-+' => '<img src="'. $emoticons_url.'april'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="april" />',

			 'o-+' => '<img src="'. $emoticons_url.'april'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="april" />',

			 '(%)' => '<img src="'. $emoticons_url.'yin_yang'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="yin yang" />',

			 ':bz' => '<img src="'. $emoticons_url.'bee'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="bee" />',

			 ':bZ' => '<img src="'. $emoticons_url.'bee'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="bee" />',

			 ':Bz' => '<img src="'. $emoticons_url.'bee'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="bee" />',

			 ':BZ' => '<img src="'. $emoticons_url.'bee'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="bee" />',

			 '[..]' => '<img src="'. $emoticons_url.'transformer'.$emoticon_size.'.gif" style="border:none;background:none;vertical-align:-25%;" alt="transformer" />'

         );
       
        $string = strtr( $str, $replacements );
        return $string;
    }
} 
?>