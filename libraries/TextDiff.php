<?php

class TextDiff {

    private $str1 = null;
    private $str2 = null;

    public function __construct($str1, $str2) {
        $this->str1 = str_split($str1);
        $this->str2 = str_split($str2);
    }
    
    private function diff() { 
        $valuesArr = [];
        $statusArr = [];
        $arr = [];

        for ($str1Ctr = 0; $str1Ctr < count($this->str1); $str1Ctr++) {
            for ($str2Ctr = 0; $str2Ctr < count($this->str2); $str2Ctr++) {

                if ($this->str1[$str1Ctr] == $this->str2[$str2Ctr]) {
                    $val = $arr[$str1Ctr - 1][$str2Ctr - 1];
                    $arr[$str1Ctr][$str2Ctr] = $val + 1;
                } else {
                    $val1 = $arr[$str1Ctr - 1][$str2Ctr];
                    $val2 = $arr[$str1Ctr][$str2Ctr - 1];
                    $arr[$str1Ctr][$str2Ctr] = max($val1, $val2);
                }

            }
        }

        $str1NumChars = count($this->str1) - 1;
        $str2NumChars = count($this->str2) - 1;
        while ( ($str1NumChars > -1) || ($str2NumChars > -1) ) {

            if ($str2NumChars > -1) {
                if ($arr[$str1NumChars][$str2NumChars - 1] == $arr[$str1NumChars][$str2NumChars]) {
                    $valuesArr[] = $this->str2[$str2NumChars];
                    $statusArr[] = 'added';
                    $str2NumChars--;  
                    continue;           
                }
            }

            if ($str1NumChars > -1) {
                if ($arr[$str1NumChars - 1][$str2NumChars] == $arr[$str1NumChars][$str2NumChars]) {
                    $valuesArr[] = $this->str1[$str1NumChars];
                    $statusArr[] = 'deleted';
                    $str1NumChars--;
                    continue;              
                }
            }
            
            $valuesArr[] = $this->str1[$str1NumChars];
            $statusArr[] = 'no change';

            $str1NumChars--;
            $str2NumChars--;

        }    

        return [
            'values' => array_reverse($valuesArr), 
            'status' => array_reverse($statusArr)
        ];
    }
    
    public function htmlDiff() { 
        $diff = $this->diff();

        $result = '';
        $tStatus = '';
        for ($ctr = 0; $ctr < count($diff['values']); $ctr++) {
            $status = $diff['status'][$ctr];

            if ($status != $tStatus) {
                if ($tStatus == 'deleted') {
                    $result .= '</del>';
                } else if ($tStatus == 'added') {
                    $result .= '</ins>';
                }

                if ($status == 'deleted') {
                    $result .= '<del style="background-color:#29A745;">';
                } else if ($status == 'added') {
                    $result .= '<ins style="background-color:#DF2F46;">';
                }
            }

            $result .= $diff['values'][$ctr];

            $tStatus = $status;
        }

        if ($tStatus == 'deleted') {
            $result .= '</del>';
        } else if ($tStatus == 'added') {
            $result .= '</ins>';
        }

        return $result; 
    }

}

?>
