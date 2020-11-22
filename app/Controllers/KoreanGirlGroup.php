<?php namespace AppControllers;
class KoreanGirlGroup  extends BaseController
{
    public function index()
    {
         //connect to the model
    $member = new AppModelsmember();
         //retrieve all the records
    $records = $member-findAll();
    
         //get a template parser
    $parser = ConfigServicesparser();
         //tell it about the substitions
    $table = new CodeIgniterViewTable();
    
    
    $headings=$member-fields;
    $table-setHeading($headings[1],$heading[7],details);
    
     foreach ($records as $record) 
    {
        $nameLink = anchor("KoreanGirlGroup/showme/$record-id" ,"details");
        $table-addRow($nameLink,$record-description);
    }
    
    $template = [
                'table_open' =>'<table cellpadding="5px">',
                'cell_start' => 'td style=border 1px solid #dddddd;',
                'row_alt_start' => 'tr style=background-color#dddddd',
                ];
    $table-setTemplate($template);
    
   $fields = [
       'title' => 'KoreanGirlGroup',
       'heading' => 'KoreanGirlGroup',
       'footer' => 'lyx'];
   return $parser-setData($fields)-render('templatestop') .
           $table-generate().
           $parser-setData($fields)-render('templatesbottom');
    }
    public function showme($id)
    {
         //connect to the model
      $member = new AppModelsmember();
        // retrieve all the records
      $record = $member-find($id);
       //get a template parser
      $parser = ConfigServicesparser();
      // tell it about the substitions
      $table = new CodeIgniterViewTable();
    
    $headings = $member-fields;
    $table-addRow($headings[0],$record['id'])
          -addRow($headings[1],$record['name'])
          -addRow($headings[2],$record['country'])
          -addRow($headings[3],$record['favorite food'])
          -addRow($headings[4],"<img src=\"/image/".$record['image']."\"/>");
          -addRow($headings[5],$record['hobby'])
          -addRow($headings[6],$record['Favorite color'])
          -addRow($headings[7],$record['company']);

    $template = [
                'table_open' => 'table cellpadding=5px',
                'cell_start' => 'td style=border 1px solid #dddddd;',
                'row_alt_start' => 'tr style=background-color#dddddd',
                ];
    $table-setTemplate($template);
    
   $fields = [
       'title' => 'KoreanGirlGroup',
       'heading' => 'KoreanGirlGroup',
       'footer' => 'yingxianLiao'
       ];
      
     return $parser-setData($fields)-render('templatestop') .
           $table-generate().
           $parser-setData($fields)-render('templatesbottom');
    }
}