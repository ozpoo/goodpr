timing_test(function() {
  at(0, function() {
    assert_styles('#test', {'display':'none'});
  }, "Autogenerated");
  at(0.08, function() {
    assert_styles('#test', {'display':'block'});
  }, "Autogenerated");
  at(0.16, function() {
    assert_styles('#test', {'display':'none'});
  }, "Autogenerated");
  at(0.24, function() {
    assert_styles('#test', {'display':'block'});
  }, "Autogenerated");
  at(0.32, function() {
    assert_styles('#test', {'display':'none'});
  }, "Autogenerated");
  at(0.4, function() {
    assert_styles('#test', {'display':'block'});
  }, "Autogenerated");
  at(0.48000000000000004, function() {
    assert_styles('#test', {'display':'none'});
  }, "Autogenerated");
  at(0.56, function() {
    assert_styles('#test', {'display':'none'});
  }, "Autogenerated");
}, "Autogenerated checks.");
