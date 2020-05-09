<?php

namespace Gries\🙂;

function 🙂() {
    $🔢 = range(0x1F601, 0x1F64F);
    shuffle($🔢);
    
    return mb_chr(current($🔢));
}
