// `this` is whatever is inside the 2 curly brace blocks
// `options.fn()` behaves as a normal template, outputting HTML

module.exports.register = function(Handlebars, options) {
  Handlebars.registerHelper('translate', function(options) {

    // var str = options.hash.language + ' - ' + this;
    // return new Handlebars.SafeString('<div class="mybold">' + options.fn(this) + '</div>');
    // return new Handlebars.SafeString('<div class="mybold">SAY WHAAT ' + options.hash.content.jp + '</div>');

  });
};