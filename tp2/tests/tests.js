QUnit.test( "hello test", function( assert ) {
    assert.ok( 1 == "1", "Passed!" );
});
  
QUnit.test( "test nbr pair", function( assert ) {
    assert.expect(6); //on doit avoir 6 assertions
    assert.ok(check(2),true,'nbr pair');
    assert.notOk(check(3),false,"nbr impair");
    assert.notOk(check(5),false,"nbr impair");
    assert.notOk(check(7),false,"nbr impair");
    assert.ok(check(4),true,"nbr pair");
    assert.ok(check(8),true,"nbr pair");
});

QUnit.test( "test concat", function( assert ) {
    assert.equal(concat("hanae"),"Bonjour hanae","test Bonjour hanae");
    assert.equal(concat("khaoula"),"Bonjour khaoula","test ok bonjour khaoula");
    assert.equal(concat("houda"),"Bonjour houda","test ok bonjour houda");
});
