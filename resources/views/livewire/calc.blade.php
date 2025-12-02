<?php

use function Livewire\Volt\{state, mount};

state(['val1', 'calc', 'val2', 'symbol', 'result']);

mount(function ($val1, $calc, $val2) {
    $this->val1 = $val1; 
    $this->calc = $calc;
    $this->val2 = $val2;
    $this->symbol = $symbol;
});

// $calc = addition( + );
// $calc = subtraction( - );
// $calc = multiplication( * );
// $calc = division( / );
// $calc = ' ' ( ? );

if($this->calc == addition) {
    $symbol = '+';
    $result = $val1 + $val2;
} elseif($this->calc == subtraction) {
    $symbol = '-';
    $result = $val1 - $val2;
} elseif($this->calc == multiplication) {
    $symbol = '*';
    $result = $val1 * $val2;
} elseif($this->calc == division) {
    $symbol = '/';
    $result = $val1 / $val2;
}
// }else($this->calc == null) {
//     $symbol = ' ? ';
//     $result = "無効な演算子です";
?>

<div>
    <h1>計算結果</h1>
    <p>{{ $val1 }} {{ $calc }} {{ $val2 }} = {{ $result }}</p>
</div>
