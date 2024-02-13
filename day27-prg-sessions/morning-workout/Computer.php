<?php

// 1.
class Computer
{
    // 2.
    public ?string $model = null;
    public ?string $operating_system = null;
    public bool $is_portable = false;
    public string $status = 'off';

    // 6.
    public function switchOff(): void
    {
        $this->status = 'off';
    }

    // 7.
    public function toggleSwitch()
    {
        // if ($this->status === 'on') {
        //     $this->status = 'off';
        // } else {
        //     $this->status = 'on';
        // }

        $this->status = $this->status === 'on' ? 'off' : 'on';
    }
}