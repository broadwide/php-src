--TEST--
Incorrect constant propagation on BOOL in pass 1
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
function test($foo) {
    $bar = 0;
    if ($bar === 1 && $foo && PHP_SAPI !== 'cgi') {
        echo "bar\n";
    }
    echo "foo\n";
}
test(1);
?>
--EXPECT--
foo
