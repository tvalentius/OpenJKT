<?php

class APBD extends Eloquent  {
        
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'option';

    public $key = 'ZI7T32mto4omnAGmN9zNHrWm5pUAMahY';

    public $endpoint = 'http://api.hackjak.bappedajakarta.go.id/apbd';

    public function get_category($category_type,$year)
    {
        //http://api.hackjak.bappedajakarta.go.id/apbd?apiKey=ZI7T32mto4omnAGmN9zNHrWm5pUAMahY
        $data = array();

        $ch = curl_init();

        $param = '/'.$category_type.'/'.$year.'?';

        $array_to_send = array('apiKey' => $this->key,
                                ''
                                );

        
        curl_setopt($ch, CURLOPT_URL, $this->endpoint . $param . http_build_query($array_to_send)); 

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, '3');
        $content = json_decode(curl_exec($ch));
        curl_close($ch);



        if ($content === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }

        return $content;
    }

    public function get_category_item_list($category_item_id,$category)
    {
        $data = array();

        

        $param = '/'.'search'.'?';

        $array_to_send = array('apiKey' => $this->key,
                                'year' => '2013',
                                'per_page' => '250',
                                'urusan' => $category_item_id,
                                'page' => 1
                                );

        if($category == 'program') {
            $array_to_send['urusan'] = '';
            $array_to_send['program'] = $category_item_id;
        }

        if($category == 'skpd') {
            $array_to_send['urusan'] = '';
            $array_to_send['SKPDKode2013'] = $category_item_id;
        }



        //*
        ///search?apiKey=ZI7T32mto4omnAGmN9zNHrWm5pUAMahY&urusan=2.03&year=2013&per_page=250

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->endpoint . $param . http_build_query($array_to_send)); 

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, '3');
        $content = json_decode(curl_exec($ch));
        curl_close($ch);

        if ($content === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }

        /*/
        $data = array(
          $this->endpoint . $param . http_build_query($array_to_send).'&page=1',
          $this->endpoint . $param . http_build_query($array_to_send).'&page=2',
          $this->endpoint . $param . http_build_query($array_to_send).'&page=3'
        );
        $r = $this->multiRequest($data);

        $content = $r;
        //*/
        //curl_close($ch);
        //calculation
        
        

        return $content;
    }

    public function get_item_detail($item_id)
    {
    	
    }

    function multiRequest($data, $options = array()) {
 
      // array of curl handles
      $curly = array();
      // data to be returned
      $result = array();
     
      // multi handle
      $mh = curl_multi_init();
     
      // loop through $data and create curl handles
      // then add them to the multi-handle
      foreach ($data as $id => $d) {
     
        $curly[$id] = curl_init();
     
        $url = (is_array($d) && !empty($d['url'])) ? $d['url'] : $d;
        curl_setopt($curly[$id], CURLOPT_URL,            $url);
        curl_setopt($curly[$id], CURLOPT_HEADER,         0);
        curl_setopt($curly[$id], CURLOPT_RETURNTRANSFER, 1);
     
        // post?
        if (is_array($d)) {
          if (!empty($d['post'])) {
            curl_setopt($curly[$id], CURLOPT_POST,       1);
            curl_setopt($curly[$id], CURLOPT_POSTFIELDS, $d['post']);
          }
        }
     
        // extra options?
        if (!empty($options)) {
          curl_setopt_array($curly[$id], $options);
        }
     
        curl_multi_add_handle($mh, $curly[$id]);
      }
     
      // execute the handles
      $running = null;
      do {
        curl_multi_exec($mh, $running);
      } while($running > 0);
     
     
      // get content and remove handles
      foreach($curly as $id => $c) {
        $result[$id] = curl_multi_getcontent($c);
        curl_multi_remove_handle($mh, $c);
      }
     
      // all done
      curl_multi_close($mh);
     
      return $result;
    }
    
    
}