module.exports.register = function(Handlebars, options) {
  Handlebars.registerHelper('repeat', function(n, block) {
    var accum = '';
    for (var i = 1; i <= n; ++i)
      accum += block.fn(i);
    return accum;
  });
};