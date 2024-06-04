<?php 
class Computer
{
    public $model = null;
    public $operating_system = null;
    public $is_portable = false;
    public $status = 'off';

    public function switchOff()
    {
        $this->status = 'off';
    }

    public function toggleSwitch()
    {
        // if ($this->status == 'on') {
        //     $this->status = 'off';
        // } elseif ($this->status == 'off') {
        //     $this->status = 'on';
        // }

        switch ($this->status) {
            case 'on':
                $this->status = 'off';
                break;
            case 'off':
                $this->status = 'on';
                break;
            default:
                break;
        }
        // $this->status = $this->status == 'off' ? 'on' : 'off';
    }
}
?>