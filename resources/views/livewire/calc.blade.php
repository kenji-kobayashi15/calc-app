<?php

use function Livewire\Volt\{state, mount};

state(['val1', 'calc', 'val2', 'symbol', 'result']);

mount(function ($val1, $calc, $val2) {
    $this->val1 = $val1;
    $this->calc = $calc;
    $this->val2 = $val2;

    if ($this->calc === 'addition') {
        $this->symbol = '+';
        $this->result = $this->val1 + $this->val2;
    } elseif ($this->calc === 'subtraction') {
        $this->symbol = '-';
        $this->result = $this->val1 - $this->val2;
    } elseif ($this->calc === 'multiplication') {
        $this->symbol = '×';
        $this->result = $this->val1 * $this->val2;
    } elseif ($this->calc === 'division') {
        $this->symbol = '÷';
        if ($this->val2 == 0) {
            $this->result = '0で割ることはできません';
        } else {
            $this->result = $this->val1 / $this->val2;
        }
    } else {
        $this->symbol = ' ? ';
        $this->result = '無効な演算子です';
    }
});
?>

<div>
    <h1>計算結果</h1>
    <p>{{ $val1 }} {{ $symbol }} {{ $val2 }} = {{ $result }}</p>
</div>
