// `this` is whatever is inside the 2 curly brace blocks
// `options.fn()` behaves as a normal template, outputting HTML

module.exports.register = function(Handlebars, options) {
  Handlebars.registerHelper('translate', function(options) {


    // var content = JSON.parse(options.hash.content);

    // return new Handlebars.SafeString(options.fn(content));
    // return new Handlebars.SafeString(content.en);

    // return new Handlebars.SafeString('<div class="mybold">' + options.fn(this) + '</div>');
    // return new Handlebars.SafeString('<div class="mybold">SAY WHAAT ' + options.hash.content.jp + '</div>');
    //
    //
    // var attribs;
    //
    // attribs = JSON.parse(options.hash.dataAttribs);
    // console.log(attribs.text + " -- " + attribs.class);


    return 'Muhaaaaaa';

  });
};